<script context="module">
    import Layout, { title } from '@/Shared/Layout.svelte'
    export const layout = Layout
  </script>
  
  <script>
    import { inertia } from '@inertiajs/inertia-svelte'
    $title = 'Dashboard'
  </script>
  
<div>
    <h1 class="mb-8 font-bold text-3xl">Dashboard</h1>
</div>