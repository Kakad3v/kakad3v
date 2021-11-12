<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import { page } from '@inertiajs/inertia-svelte';
    export const layout = Layout
  </script>
  
  <script>
    $title = 'Dashboard'
  </script>
  
<div>
  <p>Welcome, { $page.props.auth.user.name }</p>
</div>