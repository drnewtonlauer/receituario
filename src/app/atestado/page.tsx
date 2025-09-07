@@ .. @@
 import { Metadata } from 'next';
 
 export const metadata: Metadata = {
   title: 'Atestados - Med Lauer',
   description: 'Emissão de atestados médicos',
-  viewport: 'width=device-width, initial-scale=1',
 };
 
+export const viewport = {
+  width: 'device-width',
+  initialScale: 1,
+};
+
 export default function AtestadoPage() {