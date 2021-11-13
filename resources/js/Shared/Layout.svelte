<script context="module">
    import FlashMessages from '@/Shared/FlashMessages.svelte';
    import MainMenu from '@/Shared/MainMenu.svelte';
    import { writable } from 'svelte/store';
    export const title = writable(null)
</script>

<script>
</script>

<svelte:head>
    <title>{$title ? `${$title} - KakaD3v` : 'KakaD3v'}</title>
</svelte:head>

<div class="flex flex-grow overflow-hidden bg-indigo-50 h-full min-h-screen">
    <div class="flex-1 px-4 py-8 md:py-6 md:px-12 overflow-y-auto" scroll-region>
      <MainMenu />
      <FlashMessages />
      <div class="mt-4">
        <slot />
      </div>
    </div>
</div>
