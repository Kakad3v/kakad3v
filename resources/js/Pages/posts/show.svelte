<script context="module">
    import Layout from '@/Shared/Layout.svelte';
    export const layout = Layout
</script>

<script>
    export let post = {};
</script>

<div>
    <h1>{post.title}</h1>
</div>
