<script context="module">
    import Layout from '@/Shared/Layout.svelte';
    import { Inertia } from '@inertiajs/inertia';
    import LoadingButton from '../../Shared/LoadingButton.svelte';
    import TextAreaInput from '../../Shared/TextAreaInput.svelte';
    import TextInput from '../../Shared/TextInput.svelte';
    export const layout = Layout
</script>

<script>
    export let errors = {}

    let sending = false

    let form = {
    title: '',
        body: '',
        image_url: ''
    }

    function submit() {
      const data = {
        title: form.title,
        body: form.body,
        image_url: form.image_url,
      }
      
      Inertia.post(route('posts.store'), data, {
        onStart: () => sending = true,
        onFinish: () => sending = false,
      })
    }
</script>

<svelte:head>
    <title>KakaD3v - Create New Post</title>
</svelte:head>

<div class="flex justify-center items-center">
    <div class="w-full sm:max-w-lg">
      <form class="mt-2 bg-white rounded-2xl shadow-xl overflow-hidden"
        on:submit|preventDefault={submit}>
        <div class="px-5 sm:px-10 py-12">
          <h1 class="text-center font-bold text-2xl text-gray-600">Create A New Post</h1>
          <div class="mx-auto mt-2 w-28 border-b-2" />
          <TextInput
                bind:value={form.title}
                error={errors.title}
                class="mt-8"
                label="Title"
                type="text"
                autocapitalize="off" 
                placeholder="Post Title"
            />
            <TextInput 
                bind:value={form.image_url} 
                error={errors.image_url}
                class="mt-3" 
                label="Image" 
                type="Text" 
                placeholder="Cover Image Url"
            />
           <TextAreaInput
                bind:value={form.body}
                error={errors.body}
                class="mt-3"
                label="Body:"
                type="text"
                placeholder="Post Body"
            />
          <div class="pt-4  flex justify-between items-center">
            <LoadingButton 
              bind:loading={sending} 
              class="shadow-md flex justify-center items-center bg-indigo-500 w-full py-2 text-center rounded-xl text-white text-xl font-semibold tracking-wide" 
              type="submit"
              >
              Save Post
            </LoadingButton>
          </div>
        </div>
      </form>
    </div>
</div>