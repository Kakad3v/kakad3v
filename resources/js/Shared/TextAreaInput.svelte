<script>
    import fitTextarea from 'fit-textarea';
    import { nanoid } from 'nanoid';
    import { onMount } from 'svelte';
    import Label from './Label.svelte';
    export let id = `textarea-input-${nanoid(5)}`
    export let label
    export let value
    export let autosize = true
    export let error
    let input
    export const focus = () => input.focus()
    export const select = () => input.select()
    $: props = {
      ...$$restProps,
      class: 'form-textarea',
    }
    onMount(() => {
      if (autosize) {
        fitTextarea.watch(input)
      }
    })
    function update(event) {
      value = event.target.value
    }
  </script>
  
  <div class={$$restProps.class}>
    <div class="flex flex-col space-y-1">
        <Label {label} {id} />
        <textarea {...props} bind:this={input} class:error {id} class="rounded-xl text-gray-700" {value} on:input={update} />
    </div>
    {#if error}
      <div class="text-sm text-red-500">{error}</div>
    {/if}
  </div>