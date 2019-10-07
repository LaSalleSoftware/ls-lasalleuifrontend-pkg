@extends('.base.layouts.baselayout')

@section('title', 'TailWindPlay')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo vitae mi egestas molestie. Praesent commodo justo leo, eget tempor leo accumsan sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam eu arcu sed ipsum eleifend finibus ac vitae ligula. Pellentesque lacinia massa vitae odio finibus suscipit. Praesent suscipit erat nec rutrum dignissim. Nulla facilisi. Nullam a volutpat est. Maecenas vel tellus convallis, malesuada dui ac, congue magna. Donec fermentum tortor mauris, semper tristique mi pharetra in. Cras sodales egestas ante, sit amet imperdiet tortor accumsan sit amet. Aliquam consequat ante nec lacus faucibus dictum. Pellentesque vel nulla ornare, tempor turpis at, rutrum justo.

        Vivamus ultricies est vel molestie lobortis. Nullam porttitor, eros et dignissim finibus, orci ante interdum nibh, et molestie lacus ipsum id magna. Curabitur imperdiet orci in quam pellentesque, id porttitor magna consectetur. Aliquam ornare nisi a sapien tempor, sed finibus libero mollis. Duis malesuada, tortor id tempor laoreet, diam ex elementum dui, fermentum feugiat neque mi at augue. Quisque est ipsum, semper in augue et, imperdiet vehicula nisi. Mauris tristique lacinia lorem ac ultricies. Quisque vel feugiat lorem. Nunc aliquam, massa vitae semper blandit, sem augue finibus urna, eget eleifend leo ex at orci. Morbi in elementum nisl. Etiam laoreet convallis mauris, ut pharetra tortor blandit eu.

        tincidunt lorem a, aliquet lectus. Praesent posuere ante dolor, ornare porttitor leo scelerisque nec. Quisque sit amet pulvinar libero, tincidunt auctor mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat. Maecenas cursus sem volutpat tincidunt tempus. Pellentesque dapibus lorem lorem, et pretium diam ornare eu. Duis sodales pellentesque tellus, ut dictum est varius id. In egestas tellus eu justo ullamcorper commodo. Vivamus facilisis in elit vel ornare.
    </p>


@endsection
