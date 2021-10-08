<template>
    <div>
        <basic-card
            v-for="sample in samples"
            :key="sample.id"
            :title="sample.name"
            :description="sample.description"
            :code="sample.code"
            :status="sample.status"
        ></basic-card>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    name: "BasicSampleIndex",
    data() {
        return {
            samples: []
        }
    },
    mounted: async function () {
        const response = await axios.get('/api/sample')
        this.samples = response.data.data
    }
}
</script>

<style scoped>

</style>
