@@ .. @@
 import { Metadata } from 'next';
 
 export const metadata: Metadata = {
   title: 'Med Lauer - Sistema de Prescrição Médica',
   description: 'Sistema moderno de prescrição médica para profissionais de saúde',
-  viewport: 'width=device-width, initial-scale=1',
 };
 
+export const viewport = {
+  width: 'device-width',
+  initialScale: 1,
+};
+
 export default function HomePage() {