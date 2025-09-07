@@ .. @@
 import { Metadata } from 'next';
 
 export const metadata: Metadata = {
   title: 'Receituário - Med Lauer',
   description: 'Sistema de prescrição médica digital',
-  viewport: 'width=device-width, initial-scale=1',
 };
 
+export const viewport = {
+  width: 'device-width',
+  initialScale: 1,
+};
+
 export default function ReceituarioPage() {