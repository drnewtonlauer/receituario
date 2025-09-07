@@ .. @@
 import { clsx, type ClassValue } from 'clsx'
-import { twMerge } from 'tailwindcss-merge'
+import { twMerge } from 'tailwind-merge'
 
 export function cn(...inputs: ClassValue[]) {
   return twMerge(clsx(inputs))
 }