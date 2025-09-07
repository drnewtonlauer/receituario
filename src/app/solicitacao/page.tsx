@@ .. @@
 import { Metadata } from 'next';
 
 export const metadata: Metadata = {
   title: 'Solicitações - Med Lauer',
   description: 'Sistema de solicitações médicas',
-  viewport: 'width=device-width, initial-scale=1',
 };
 
+export const viewport = {
+  width: 'device-width',
+  initialScale: 1,
+};
+
 export default function SolicitacaoPage() {