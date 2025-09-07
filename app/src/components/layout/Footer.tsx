export function Footer() {
  return (
    <footer className="bg-gray-50 border-t">
      <div className="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <h3 className="text-sm font-semibold text-gray-900 tracking-wider uppercase">
              Sistema
            </h3>
            <ul className="mt-4 space-y-4">
              <li>
                <span className="text-base text-gray-500">
                  Med Lauer - Sistema de Prescrição Médica
                </span>
              </li>
            </ul>
          </div>
          
          <div>
            <h3 className="text-sm font-semibold text-gray-900 tracking-wider uppercase">
              Desenvolvedor
            </h3>
            <ul className="mt-4 space-y-4">
              <li>
                <span className="text-base text-gray-500">
                  Newton Lauer
                </span>
              </li>
            </ul>
          </div>
          
          <div>
            <h3 className="text-sm font-semibold text-gray-900 tracking-wider uppercase">
              Colaboração
            </h3>
            <ul className="mt-4 space-y-4">
              <li>
                <span className="text-base text-gray-500">
                  Anísio Neto
                </span>
              </li>
            </ul>
          </div>
        </div>
        
        <div className="mt-8 border-t border-gray-200 pt-8">
          <p className="text-base text-gray-400 text-center">
            &copy; 2025 Med Lauer. Todos os direitos reservados.
          </p>
        </div>
      </div>
    </footer>
  )
}