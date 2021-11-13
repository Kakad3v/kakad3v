<script>
    import { inertia,Link } from '@inertiajs/inertia-svelte';
</script>

<nav class="flex justify-between items-center">
    <Link href="/" class="font-semibold text-gray-600 text-xl">Kaka<span class="font-bold border-b-4 text-indigo-500">D3v</span></Link>
    <ul>
        <li>
            <button use:inertia={{ method: 'post', href: '/logout' }} type="button">Logout</button>
        </li>
    </ul>
</nav>
