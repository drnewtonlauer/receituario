// ./src/app/page.tsx
import type { Metadata, Viewport } from 'next';

export const metadata: Metadata = {
  title: 'Med Lauer - Sistema de Prescrição Médica',
  description: 'Sistema moderno de prescrição médica para profissionais de saúde',
};

export const viewport: Viewport = {
  width: 'device-width',
  initialScale: 1,
};

export default function Page() {
  return (
    <main style={{ padding: 24 }}>
      <h1>Med Lauer</h1>
      <p>Sistema moderno de prescrição médica para profissionais de saúde.</p>
    </main>
  );
}
