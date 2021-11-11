<script>
    import LoadingSpinner from './LoadingSpnner.svelte';
    export let loading = false
    $: props = {
      ...$$restProps,
      class: `flex items-center ${$$restProps.class || ''}`,
    }
  </script>
  
  <button {...props} disabled={loading}>
    {#if loading}
      <div class="flex space-x-3 items-center">
        <LoadingSpinner />
        <span>Processing...</span>
      </div>
    {:else}
      <slot />
    {/if}
  </button>