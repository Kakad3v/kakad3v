<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import { inertia } from '@inertiajs/inertia-svelte';
    import { route } from '../Utils';
    export const layout = Layout
</script>
  
<script>
  $title = 'Dashboard'
  export let posts = []
</script>
  
<div>
    <div class="grid sm:grid-cols-3 gap-3">
      {#each posts as post}
        <div class="flex flex-col space-y-2">
          <p>{post.title}</p>
          <a use:inertia href={route('posts.show', post.slug)}>Visit</a>
        </div>
      {/each}
    </div>
</div>
