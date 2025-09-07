'use client'

import Link from 'next/link'
import { useRouter } from 'next/navigation'
import { useState, useEffect } from 'react'
import { User, LogOut, Menu, X } from 'lucide-react'
import { authService } from '@/lib/auth'
import { Button } from '@/components/ui/Button'

export function Header() {
  const router = useRouter()
  const [user, setUser] = useState<any>(null)
  const [isMenuOpen, setIsMenuOpen] = useState(false)

  useEffect(() => {
    const getUser = async () => {
      try {
        const currentUser = await authService.getCurrentUser()
        setUser(currentUser)
      } catch (error) {
        console.error('Error getting user:', error)
      }
    }
    
    getUser()
  }, [])

  const handleSignOut = async () => {
    try {
      await authService.signOut()
      setUser(null)
      router.push('/login')
    } catch (error) {
      console.error('Error signing out:', error)
    }
  }

  return (
    <header className="bg-medical-blue shadow-sm">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-16">
          {/* Logo */}
          <Link href="/" className="flex items-center space-x-2">
            <div className="w-8 h-8 bg-white rounded-full flex items-center justify-center">
              <span className="text-medical-blue font-bold text-lg">M</span>
            </div>
            <span className="text-white font-semibold text-xl">Med Lauer</span>
          </Link>

          {/* Desktop Navigation */}
          <nav className="hidden md:flex items-center space-x-8">
            {user ? (
              <>
                <Link href="/dashboard" className="text-white hover:text-gray-200 transition-colors">
                  Painel
                </Link>
                <Link href="/receituario" className="text-white hover:text-gray-200 transition-colors">
                  Receituário
                </Link>
                <Link href="/solicitacao" className="text-white hover:text-gray-200 transition-colors">
                  Solicitação
                </Link>
                <Link href="/atestado" className="text-white hover:text-gray-200 transition-colors">
                  Atestado
                </Link>
                
                {/* User Menu */}
                <div className="flex items-center space-x-4">
                  <div className="flex items-center space-x-2 text-white">
                    <User className="w-4 h-4" />
                    <span className="text-sm">{user?.user_metadata?.nome || user?.email}</span>
                  </div>
                  <Button
                    variant="ghost"
                    size="sm"
                    onClick={handleSignOut}
                    className="text-white hover:bg-white/10"
                  >
                    <LogOut className="w-4 h-4" />
                  </Button>
                </div>
              </>
            ) : (
              <div className="flex items-center space-x-4">
                <Link href="/login">
                  <Button variant="outline" size="sm" className="text-white border-white hover:bg-white hover:text-medical-blue">
                    Entrar
                  </Button>
                </Link>
              </div>
            )}
          </nav>

          {/* Mobile menu button */}
          <div className="md:hidden">
            <Button
              variant="ghost"
              size="sm"
              onClick={() => setIsMenuOpen(!isMenuOpen)}
              className="text-white"
            >
              {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </Button>
          </div>
        </div>

        {/* Mobile Navigation */}
        {isMenuOpen && (
          <div className="md:hidden">
            <div className="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-medical-blue">
              {user ? (
                <>
                  <Link href="/dashboard" className="block px-3 py-2 text-white hover:bg-white/10 rounded-md">
                    Painel
                  </Link>
                  <Link href="/receituario" className="block px-3 py-2 text-white hover:bg-white/10 rounded-md">
                    Receituário
                  </Link>
                  <Link href="/solicitacao" className="block px-3 py-2 text-white hover:bg-white/10 rounded-md">
                    Solicitação
                  </Link>
                  <Link href="/atestado" className="block px-3 py-2 text-white hover:bg-white/10 rounded-md">
                    Atestado
                  </Link>
                  <div className="border-t border-white/20 pt-4">
                    <div className="px-3 py-2 text-white text-sm">
                      {user?.user_metadata?.nome || user?.email}
                    </div>
                    <button
                      onClick={handleSignOut}
                      className="block w-full text-left px-3 py-2 text-white hover:bg-white/10 rounded-md"
                    >
                      Sair
                    </button>
                  </div>
                </>
              ) : (
                <Link href="/login" className="block px-3 py-2 text-white hover:bg-white/10 rounded-md">
                  Entrar
                </Link>
              )}
            </div>
          </div>
        )}
      </div>
    </header>
  )
}