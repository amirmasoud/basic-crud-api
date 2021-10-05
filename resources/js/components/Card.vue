<template>
    <div class="bg-light p-5 rounded mt-4">
        <h1>{{ title }}</h1>
        <p class="lead">{{ description }}</p>
        <div>
            <pre>
                <code>{{ code }}</code>
            </pre>
        </div>
        <p>{{ status }}</p>
    </div>
</template>

<script>
export default {
    name: "BasicCard",
    props: ['title', 'description', 'code', 'status']
}
</script>
