<template>
  <div>    
    <section class="content-header">
      <h1>
        Contact Page
        <!-- <small>Optional description</small> -->
      </h1>
    </section>

    <section class="content">      
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card card-default">
            <div class="card-header">The Contact Page</div>
            <div class="card-body">
                I'm an Contact component!
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