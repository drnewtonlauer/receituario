import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
import './globals.css'
import { Header } from '@/components/layout/Header'
import { Footer } from '@/components/layout/Footer'

const inter = Inter({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: {
    default: 'Med Lauer - Sistema de Prescrição Médica',
    template: '%s | Med Lauer'
  },
  description: 'Sistema moderno de prescrição médica, receituário, solicitações e atestados médicos.',
  keywords: ['medicina', 'prescrição', 'receituário', 'atestado médico', 'sistema médico'],
  authors: [{ name: 'Newton Lauer' }, { name: 'Anísio Neto' }],
  creator: 'Newton Lauer',
  publisher: 'Med Lauer',
  robots: {
    index: true,
    follow: true,
    googleBot: {
      index: true,
      follow: true,
      'max-video-preview': -1,
      'max-image-preview': 'large',
      'max-snippet': -1,
    },
  },
  openGraph: {
    type: 'website',
    locale: 'pt_BR',
    url: 'https://medlauer.com',
    title: 'Med Lauer - Sistema de Prescrição Médica',
    description: 'Sistema moderno de prescrição médica, receituário, solicitações e atestados médicos.',
    siteName: 'Med Lauer',
  },
  twitter: {
    card: 'summary_large_image',
    title: 'Med Lauer - Sistema de Prescrição Médica',
    description: 'Sistema moderno de prescrição médica, receituário, solicitações e atestados médicos.',
  },
  viewport: {
    width: 'device-width',
    initialScale: 1,
    maximumScale: 1,
  },
  verification: {
    google: 'google-site-verification-code',
  },
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="pt-BR">
      <body className={inter.className}>
        <div className="min-h-screen flex flex-col">
          <Header />
          <main className="flex-1">
            {children}
          </main>
          <Footer />
        </div>
      </body>
    </html>
  )
}