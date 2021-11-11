<script>
    import { route } from '@/Utils';
    import { Inertia } from '@inertiajs/inertia';
    import { Link } from '@inertiajs/inertia-svelte';
    import LoadingButton from '../../Shared/LoadingButton.svelte';
    import TextInput from '../../Shared/TextInput.svelte';

    export let errors = {}
    let sending = false

    let form = {
      email: '',
      password: '',
      remember: null,
    }

    function submit() {
      const data = {
        email: form.email,
        password: form.password,
        remember: form.remember,
      }
      Inertia.post(route('login.store'), data, {
        onStart: () => sending = true,
        onFinish: () => sending = false,
      })
    }
  </script>
  
  <svelte:head>
    <title>Login - KakaD3v</title>
  </svelte:head>
  
  <div class="px-2 sm:p-6  bg-gradient-to-tl from-indigo-400 to to-pink-400 min-h-screen flex justify-center items-center">
    <div class="w-full sm:max-w-lg">
      <form
        class="mt-8 bg-white rounded-2xl shadow-xl overflow-hidden"
        on:submit|preventDefault={submit}>
        <div class="px-5 sm:px-10 py-12">
          <h1 class="text-center font-bold text-2xl text-gray-600">Hi there, Welcome Back!</h1>
          <div class="mx-auto mt-6 w-24 border-b-2" />
          <TextInput
            bind:value={form.email}
            error={errors.email}
            class="mt-10"
            label="Email"
            type="email"
            autofocus
            placeholder="Your email"
            autocapitalize="off" />
          <TextInput 
            bind:value={form.password} 
            error={errors.email}
            class="mt-4" 
            label="Password" 
            type="password" 
            placeholder="password"
             />
          <div class="flex justify-between items-center mt-4">
            <label class="select-none flex items-center" for="remember">
              <input id="remember" bind:checked={form.remember} class="mr-1 rounded" type="checkbox" />
              <span class="text-sm text-gray-700">Remember Me</span>
            </label>
            <a class="hover:underline text-indigo-400 text-sm" tabindex="-1" href="#reset-password">Forget password ?</a>
          </div>
          <div class="pt-4  flex justify-between items-center">
            <LoadingButton 
              bind:loading={sending} 
              class="shadow-md flex justify-center items-center bg-indigo-500 w-full py-2 text-center rounded-xl text-white text-xl font-semibold tracking-wide" 
              type="submit"
              >
              Continue
            </LoadingButton>
          </div>
          <div class="need-account flex space-x-2 items-center mt-4">
            <p class="text-gray-600 tracking-wide">Need an account ?</p>
            <Link href="/users/register" class="text-indigo-500 tracking-wide">Signup</Link>
          </div>
        </div>
      </form>
    </div>
  </div>