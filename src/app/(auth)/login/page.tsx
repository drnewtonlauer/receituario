@@ .. @@
 import { Metadata } from 'next';
 
 export const metadata: Metadata = {
   title: 'Login - Med Lauer',
   description: 'Faça login no sistema Med Lauer',
-  viewport: 'width=device-width, initial-scale=1',
 };
 
+export const viewport = {
+  width: 'device-width',
+  initialScale: 1,
+};
+
 export default function LoginPage() {