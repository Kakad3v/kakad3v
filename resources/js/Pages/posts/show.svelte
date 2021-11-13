<script context="module">
    import Layout from '@/Shared/Layout.svelte';
    import { inertia } from '@inertiajs/inertia-svelte';
    import { route } from '../../Utils';
    export const layout = Layout
</script>

<script>
    export let post;
</script>

<svelte:head>
    <title>KakaD3v - {post.title}</title>
</svelte:head>

<div>
    <h1>{post.title}</h1>
    <p>{post.body}</p>
    <a use:inertia href={route('post.edit', post.slug)}>Edit Post</a>
</div>
