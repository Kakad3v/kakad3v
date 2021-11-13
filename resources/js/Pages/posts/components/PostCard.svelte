<script>
    import { inertia } from '@inertiajs/inertia-svelte';
    export let post;
</script>

<div class="bg-white shadow-md rounded-2xl overflow-hidden">
    <div class="aspect-w-3 aspect-h-2">
        <img class="object-cover" src={post.src} alt={post.title}>
    </div>
    <div class="flex h-36 flex-col justify-between pb-4">
        <div class="px-6 py-4 space-y-2">
            <p class="text-xl font-semibold tracking-wide text-gray-700 truncate" title={post.title}>{post.title}</p>
            <p class="truncate text-gray-700 tracking-wide">{post.body}</p>
        </div>
        <div class="px-6 py-4 flex justify-between items-center border-t border-gray-100 bg-gray-50">
          <a use:inertia href={post.links.show}>See more</a>
          {#if post.can.administer}
            <div class="flex space-x-2 items-center">
                <a use:inertia href={post.links.edit}>Edit</a>
                <button>Delete</button>
            </div>
          {/if}
        </div>
    </div>
</div>
  