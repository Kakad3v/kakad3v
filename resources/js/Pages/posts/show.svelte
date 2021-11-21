<script context="module">
    import Layout from '@/Shared/Layout.svelte';
    import SvelteMarkdown from 'svelte-markdown';
    export const layout = Layout
</script>

<script>
    export let post;
</script>

<svelte:head>
    <title>KakaD3v - {post.data.title}</title>
</svelte:head>

<div class="sm:max-w-4xl mx-auto">
    <div class="meta mb-10">
        <h1 class="text-2xl sm:text-3xl pb-3 text-center tracking-wide font-semibold">{post.data.title}</h1>
    </div>
    <div class="image aspect-w-4 aspect-h-3 sm:aspect-h-2">
        <img class="object-cover rounded-t-xl" src={post.data.src} alt={post.data.title}>
        <div class="flex justify-center">
            <img class="w-16 h-16 shadow-md border-4 text-center border-white rounded-full -mt-8" src={post.data.user.avatar} alt={post.data.user.name}>
        </div>
    </div>
    <div class="bg-white w-full">
        <div class="content p-4 space-y-2">
            <div class="name text-center text-sm">
                <p class="text-gray-600 font-semibold tracking-wide">{post.data.user.name}</p>
                <span class="text-gray-600 tracking-wide">14th Dec 2021</span>
            </div>
            <div class="flex flex-col items-center justify-center space-y-3">
                <span class="block w-48 sm:w-80 h-[2px] bg-gray-100"></span>
                <div class="prose w-full p-4">
                    <SvelteMarkdown source={post.data.body} />
                </div>
            </div>
        </div>
    </div>
</div>
