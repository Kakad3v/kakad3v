<script>
    import { inertia,Link } from '@inertiajs/inertia-svelte';
</script>

<nav class="flex justify-between items-center pb-3">
    <Link href="/" class="font-semibold text-gray-600 text-xl">Kaka<span class="font-bold border-b-4 text-indigo-500">D3v</span></Link>
    <ul class="flex items-center space-x-3">
        <li>
            <Link href="/posts/new">New Post</Link>
        </li>
        <li>
            <button use:inertia={{ method: 'post', href: '/logout' }} type="button">Logout</button>
        </li>
    </ul>
</nav>
