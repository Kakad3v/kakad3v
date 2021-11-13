<script context="module">
    import Layout,{ title } from '@/Shared/Layout.svelte';
    import PostCard from './posts/components/PostCard.svelte';
    
    export const layout = Layout
</script>
  
<script>
  $title = 'Dashboard'
  export let posts = [];
</script>
  
<div class="grid sm:grid-cols-4 gap-6">
  {#each posts.data as post}
    <PostCard { post } />
  {/each}
</div>


