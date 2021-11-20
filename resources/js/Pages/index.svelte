<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import { onMount } from 'svelte';
    import PostCard from './posts/components/PostCard.svelte';
    export const layout = Layout
</script>
  
<script>
  $title = 'Dashboard';
  export let posts = [];

  onMount(() => {
    Echo.channel('test')
        .listen('Test', (e) => {
          console.log(e)
          posts = [...posts.data, {}, {}]
          console.log(posts)
        })
  })
</script>
  
<div class="grid sm:grid-cols-4 gap-6">
  {#each posts.data as post}
    <PostCard { post } />
  {/each}
</div>


