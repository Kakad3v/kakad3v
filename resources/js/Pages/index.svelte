<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import { inertia } from '@inertiajs/inertia-svelte';
    export const layout = Layout
</script>
  
<script>
  $title = 'Dashboard'
  export let posts = [];
</script>
  
<div>
    <div class="grid sm:grid-cols-3 gap-4">
      {#each posts.data as post}
        <div class="flex flex-col space-y-2 border-b py-2">
          <p>{post.title}</p>
          <p>{post.body}</p>
          <div>
            <a use:inertia href={post.links.show}>See more</a>
            {#if post.can.administer}
              <a use:inertia href={post.links.edit}>Edit</a>
              <button>
                Delete
              </button>
            {/if}
          </div>
        </div>
      {/each}
    </div>
</div>
