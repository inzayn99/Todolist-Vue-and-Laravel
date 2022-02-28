<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todo List</div>

                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" placeholder="Todo.." class="form-control" aria-label="todo"
                                   aria-describedby="todo">
                            <button type="button" class="btn btn-info">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
