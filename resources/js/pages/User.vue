<template>
    <div>
        <section v-if="name">
            <h1>Hello {{ name }}. </h1>
        </section>
        <section v-else>
            <h1>Daftar User</h1>
        </section>
    </div>
</template>
<script>
export default {
    props: ['name']
}
</script>

