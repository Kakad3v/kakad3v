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

<div class="flex flex-grow overflow-hidden">
    <div class="flex-1 px-4 py-8 md:p-12 overflow-y-auto" scroll-region>
      <MainMenu />
      <FlashMessages />
      <slot />
    </div>
</div>
