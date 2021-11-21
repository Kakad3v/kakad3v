<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import PostCard from './posts/components/PostCard.svelte';
    export const layout = Layout
</script>
  
<script>
    
  $title = 'Dashboard';
    
  export let posts = [];

  Echo.channel('posts')
      .listen('PostAdded', (e) => {
        console.log(e.post)
        posts = [...posts.data, e.post]
      });
</script>
  
<div class="grid sm:grid-cols-3 gap-6">
  {#each posts.data as post}
    <PostCard { post } />
  {/each}
</div>
