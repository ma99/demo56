<template>
<!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home Page       
      </h1>      
    </section>

    <section class="content">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard Home Page</div>
                <div class="card-body">
                    Welcome to Dashboard home page
                </div>
            </div>
        </div>                   
      </div>
    </section>        
  </div>      
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>