<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use RegistersUsers;
    public function run()
    {
        $x=App\Student::all();
        foreach($x as $student) {

            protected function create(array $data)
            {
                return User::create([
                    'name' => $student->name,
                    'email' => $student->email,
                    'password' => $student->password,
                    'role' => 'student',
                    'student_id' => $student->id,
                ]);
            }
        }


            DB::table('users')->insert([
                'name' => $student->name,
                'email' => $student->email,
                'password' => $student->password,
                'role' => 'student',
                'student_id' => $student->id,
            ]);
        }
        $x=\App\Teacher::all();
        foreach($x as $teacher)
        {
            DB::table('users')->insert([
                'name' => $teacher->name,
                'email' => $teacher->email,
                'password' => $teacher->password,
                'role' => 'teacher',
                'student_id' => $teacher->id,
            ]);
        }
    }
}
