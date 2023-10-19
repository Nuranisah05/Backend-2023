<?php

# membuat class Animal
class Animal
{
    private $animals; # property animals

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        echo "Data Hewan : <br>";
        foreach ($this->animals as $animal)  {
            echo $animal . "<br>";
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        array_push ($this->animals, $data);
        echo "Data hewan baru berhasil ditambahkan: $data<br>";
        # gunakan method array_push untuk menambahkan data baru
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        if (array_key_exists($index, $this->animals)) {
            array_splice ($this->animals, $index, 1);
            echo "Data hewan berhasil diperbarui: $data";
        } else {
            echo "Data tidak valid, gagal diperbarui. <br>";
         }


    }


    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('Iguana');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Panda');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";