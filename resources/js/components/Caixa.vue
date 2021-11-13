<template>
    <div class="small-box bg-info">
        <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
        </div>
        <div class="icon">
           <i class="ion ion-stats-bars "></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
</template>

<script>
export default {};
</script>

<style>
    .bg-info {
    background-color: #17a2b8!important;
}

.small-box .icon>i {
    font-size: 90px;
    position: absolute;
    right: 15px;
    top: 15px;
    transition: -webkit-transform .3s linear;
    transition: transform .3s linear;
    transition: transform .3s linear,-webkit-transform .3s linear;
}

</style>
