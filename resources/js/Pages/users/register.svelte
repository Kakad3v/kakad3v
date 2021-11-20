<script>
    import { route } from '@/Utils';
    import { Inertia } from '@inertiajs/inertia';
    import { Link } from '@inertiajs/inertia-svelte';
    import LoadingButton from '../../Shared/LoadingButton.svelte';
    import TextInput from '../../Shared/TextInput.svelte';

    export let errors = {}
    
    let sending = false

    let form = {
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
    }

    function submit() {
      const data = {
        name: form.name,
        email: form.email,
        password: form.password,
        password_confirmation: form.password_confirmation,
      }
      
      Inertia.post(route('register.store'), data, {
        onStart: () => sending = true,
        onFinish: () => sending = false,
      })
    }
  </script>
  
  <svelte:head>
    <title>Login - KakaD3v</title>
  </svelte:head>
  
  <div class="px-2 sm:p-6 bg-gradient-to-tr from-indigo-400 to to-pink-400 min-h-screen flex justify-center items-center">
    <div class="w-full sm:max-w-lg">
      <form class="mt-2 bg-white rounded-2xl shadow-xl overflow-hidden"
        on:submit|preventDefault={submit}>
        <div class="px-5 sm:px-10 py-12">
          <h1 class="text-center font-bold text-2xl text-gray-600">Welcome, Join Us!</h1>
          <div class="mx-auto mt-2 w-28 border-b-2" />
          <TextInput
            bind:value={form.name}
            error={errors.name}
            class="mt-8"
            label="Name"
            type="text"
            autocapitalize="off" 
            placeholder="Your Name"
            />
          <TextInput
            bind:value={form.email}
            error={errors.email}
            class="mt-3"
            label="Email:"
            type="email"
            placeholder="Your Email"
            autocapitalize="off" />
          <TextInput 
            bind:value={form.password} 
            error={errors.password}
            class="mt-3" 
            label="Password" 
            type="password" 
            placeholder="Password"
            />
          <TextInput 
            id="password_confirmation"
            bind:value={form.password_confirmation} 
            error={errors.password_confirmation}
            class="mt-3" 
            label="Confirm Password" 
            type="password" 
            placeholder="Confirm Password"
            name="password_confirmation"
          />
          <div class="pt-4  flex justify-between items-center">
            <LoadingButton 
              bind:loading={sending} 
              class="shadow-md flex justify-center items-center bg-indigo-500 w-full py-2 text-center rounded-xl text-white text-xl font-semibold tracking-wide" 
              type="submit"
              >
              Create Your Account
            </LoadingButton>
          </div>
          <div class="need-account flex space-x-2 items-center mt-6">
            <p class="text-gray-600 tracking-wide">Already have an account ?</p>
            <Link href="/users/login" class="text-indigo-500 tracking-wide underline">Login</Link>
          </div>
        </div>
      </form>
    </div>
  </div>