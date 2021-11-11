<script>
    import Label from '@/Shared/Label.svelte';
    import { nanoid } from 'nanoid';
    
    export let id = `text-input-${nanoid(5)}`
    export let value
    export let label
    export let type = 'text'
    export let error
    let input
    export const focus = () => input.focus()
    export const select = () => input.select()

    $: props = {
      ...$$restProps,
      class: 'form-input',
    }
    function update(event) {
      value = event.target.value
    }
  </script>
  
  <div class={$$restProps.class}>
    <div class="flex flex-col space-y-1">
      <Label class="text-sm text-gray-600" {label} {id} />
      <input {...props} bind:this={input} class:error class="rounded-xl text-gray-700" {id} {type} {value} on:input={update} />
    </div>
  
    {#if error}
      <div class="text-sm text-red-500 mt-1">{error}</div>
    {/if}
  </div>