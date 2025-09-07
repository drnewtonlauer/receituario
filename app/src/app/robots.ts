import { MetadataRoute } from 'next'

export default function robots(): MetadataRoute.Robots {
  return {
    rules: {
      userAgent: '*',
      allow: '/',
      disallow: ['/dashboard/', '/receituario/', '/solicitacao/', '/atestado/'],
    },
    sitemap: 'https://medlauer.com/sitemap.xml',
  }
}