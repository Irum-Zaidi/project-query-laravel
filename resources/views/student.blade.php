<h1> Student Deatil </h1>

@foreach ($data as $id => $student )
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Student ID: {{ $student->id }}</h2>
                <p><strong>Name:</strong> {{ $student->name }}</p>
                <p><strong>Email:</strong> {{ $student->email }}</p>
                <p><strong>Age:</strong> {{ $student->age }}</p>
                <p><strong>City:</strong> {{ $student->city }}</p>
            </div>
        </div>
    </div>
    
@endforeach