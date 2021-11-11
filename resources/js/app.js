// import Layout from '@/Shared/Layout.svelte'
import { InertiaProgress } from '@inertiajs/progress'
import { createInertiaApp } from '@inertiajs/inertia-svelte'

createInertiaApp({
  resolve: name => import(`./Pages/${name}.svelte`),
  setup({ el, App, props }) {
    new App({ target: el, props })
  },
})

InertiaProgress.init()