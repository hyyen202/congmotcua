<script src="{{ asset('custom.js') }}"></script>
<div class="container">
    <ul>
        @foreach($result as $menu)
           <?php $idmn= $menu->IDMN?>
           <li><a  onclick="loadpage(<?php echo $idmn ?>)"><div>{{ $menu->name }}</div></a></li>
        @endforeach
    </ul>
</div>