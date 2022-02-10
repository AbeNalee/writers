<template>
    <div class="card col-12 px-3 py-3">
        <h4 class="display-fore float-left m-2">${{ cost }}</h4>
        <div class="form-group m-2">
            <label>Choose a paper type</label>
            <div class="input-items active">
                 <select class="form-control" name="paperType" v-model="writingType">
                     <option v-for="type in writingTypes" :key="type.name" :value="type.value">{{ type.name }}</option>
                 </select>
            </div>
        </div>
        <div class="form-group m-2">
            <label>How soon do you want it done?</label>
            <div class="input-items active">
                <select class="form-control" name="duration" v-model="dueDays">
                    <option v-for="days in urgency" :key="days.days" :value="days.value">{{ days.days }} days</option>
                </select>
            </div>
        </div>
        <div class="form-group m-2">
            <label>Select the level of education</label>
            <div class="input-items active">
                <select class="form-control" name="level" v-model="schoolType">
                    <option v-for="type in schoolTypes" :key="type.type" :value="type.value">{{ type.type }}</option>
                </select>
            </div>
        </div>
        <div class="form-group row m-2">
            <label>Choose a spacing type and enter the number of pages</label>
            <div class="input-items active mr-2">
                <select class="form-control" name="level" v-model="spacing">
                    <option value="single">Single spacing</option>
                    <option value="double">Double spacing</option>
                </select>
            </div>
            <input class="form-control col-2 mr-2" type="number" v-model="pageCount">
            <span class="p-2 col-3">{{ pages }} page(s)</span>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            writingType: 0,
            writingTypes: [
                {
                    name: 'essay',
                    value: 13,
                },{
                    name: 'term paper',
                    value: 13,
                },{
                    name: 'case study',
                    value: 13,
                },{
                    name: 'dissertation',
                    value: 19,
                },{
                    name: 'thesis',
                    value: 19,
                },{
                    name: 'research paper',
                    value: 13,
                },{
                    name: 'others',
                    value: 13,
                }
            ],
            dueDays: 0,
            schoolType: 0,
            schoolTypes: [
                {
                    type: 'college',
                    value: 0,
                },{
                    type: 'masters & phd',
                    value: 5
                }
            ],
            pageCount: 1,
            spacing: 'double',
            urgency: [
                {
                    days : '1-5',
                    value: 6,
                },{
                    days : '5-14',
                    value: 3,
                },{
                    days : '14+',
                    value: 0,
                },
            ],
        }
    },
    methods : {
        //
    },
    computed: {
        cost: function () {
            return (this.writingType + this.schoolType + this.dueDays) * this.pages;
        },
        pages: function () {
            if (this.spacing === 'double') {
                return this.pageCount;
            } else {
                return this.pageCount * 2;
            }
        }

    },
    watch: {
        //
    }
}
</script>

<style scoped>

</style>
