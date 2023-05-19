<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<style>
    .xWrapper{
        display: flex;
        justify-content: center;
        width: 100%;
    }
</style>

<body>
        <div class="row xWrapper">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contacts</div>
                    <div class="card-body">
                        <a href="{{ url('/form-create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Full Name</th>
                                        <th>Last Name</th>
                                        <th>Company Name</th>
                                        <th>E-mail</th>
                                        <th>street Address</th>
                                        <th>street Address 2</th>
                                        <th>City</th>
                                        <th>State / Province</th>
                                        <th>Postal Zip Code</th>
                                        <th>Country</th>
                                        <th>Accessories / Jewelry </th>
                                        <th>Art / Books and Zines / Music</th>
                                        <th>Bath and Beauty</th>
                                        <th>Crochet / Embroidery / Knitting / Needlecraft</th>
                                        <th>Dolls and Miniture</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($artCraft as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->street_address }}</td>
                                        <td>{{ $item->street_address_2 }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->state_province }}</td>
                                        <td>{{ $item->postal_code }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->accessories }}</td>
                                        <td>{{ $item->art }}</td>
                                        <td>{{ $item->bath }}</td>
                                        <td>{{ $item->crochet }}</td>
                                        <td>{{ $item->dolls }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('/edit'. '/' . $item->id) }}" title="Edit Student">
                                            <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/form-delete' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
</body>
</html>