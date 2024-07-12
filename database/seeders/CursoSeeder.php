<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = "laravel";
        $curso->descripcion = "Laravel Bueno";
        $curso->categoria = "desarrollo web";

        $curso->save();
        
        // Example 2
        $curso2 = new Curso();
        $curso2->name = "Python";
        $curso2->descripcion = "Advanced Python Programming";
        $curso2->categoria = "programación";
        $curso2->save();
        
        // Example 3
        $curso3 = new Curso();
        $curso3->name = "HTML & CSS";
        $curso3->descripcion = "Web Design with HTML & CSS";
        $curso3->categoria = "desarrollo web";
        $curso3->save();
        
        // Example 4
        $curso4 = new Curso();
        $curso4->name = "Data Science";
        $curso4->descripcion = "Data Science with Python";
        $curso4->categoria = "ciencia de datos";
        $curso4->save();
        
        // Example 5
        $curso5 = new Curso();
        $curso5->name = "Machine Learning";
        $curso5->descripcion = "Introduction to Machine Learning";
        $curso5->categoria = "inteligencia artificial";
        $curso5->save();
        
        // Example 6
        $curso6 = new Curso();
        $curso6->name = "PHP";
        $curso6->descripcion = "PHP for Web Development";
        $curso6->categoria = "desarrollo web";
        $curso6->save();
        
        // Example 7
        $curso7 = new Curso();
        $curso7->name = "Ruby";
        $curso7->descripcion = "Ruby Programming Basics";
        $curso7->categoria = "programación";
        $curso7->save();
        
        // Example 8
        $curso8 = new Curso();
        $curso8->name = "C++";
        $curso8->descripcion = "Advanced C++ Programming";
        $curso8->categoria = "programación";
        $curso8->save();
        
        // Example 9
        $curso9 = new Curso();
        $curso9->name = "Java";
        $curso9->descripcion = "Java for Intermediate Learners";
        $curso9->categoria = "programación";
        $curso9->save();
        
        // Example 10
        $curso10 = new Curso();
        $curso10->name = "React";
        $curso10->descripcion = "React for Frontend Development";
        $curso10->categoria = "desarrollo web";
        $curso10->save();
        
        // Example 11
        $curso11 = new Curso();
        $curso11->name = "Angular";
        $curso11->descripcion = "Angular for Web Applications";
        $curso11->categoria = "desarrollo web";
        $curso11->save();
        
        // Example 12
        $curso12 = new Curso();
        $curso12->name = "Vue.js";
        $curso12->descripcion = "Building UI with Vue.js";
        $curso12->categoria = "desarrollo web";
        $curso12->save();
        
        // Example 13
        $curso13 = new Curso();
        $curso13->name = "Node.js";
        $curso13->descripcion = "Server-side Development with Node.js";
        $curso13->categoria = "desarrollo web";
        $curso13->save();
        
        // Example 14
        $curso14 = new Curso();
        $curso14->name = "Swift";
        $curso14->descripcion = "Swift for iOS Development";
        $curso14->categoria = "desarrollo móvil";
        $curso14->save();
        
        // Example 15
        $curso15 = new Curso();
        $curso15->name = "Kotlin";
        $curso15->descripcion = "Kotlin for Android Development";
        $curso15->categoria = "desarrollo móvil";
        $curso15->save();
        
        // Example 16
        $curso16 = new Curso();
        $curso16->name = "Flutter";
        $curso16->descripcion = "Cross-platform Development with Flutter";
        $curso16->categoria = "desarrollo móvil";
        $curso16->save();
        
        // Example 17
        $curso17 = new Curso();
        $curso17->name = "React Native";
        $curso17->descripcion = "Building Mobile Apps with React Native";
        $curso17->categoria = "desarrollo móvil";
        $curso17->save();
        
        // Example 18
        $curso18 = new Curso();
        $curso18->name = "SQL";
        $curso18->descripcion = "SQL for Database Management";
        $curso18->categoria = "bases de datos";
        $curso18->save();
        
        // Example 19
        $curso19 = new Curso();
        $curso19->name = "MongoDB";
        $curso19->descripcion = "NoSQL Databases with MongoDB";
        $curso19->categoria = "bases de datos";
        $curso19->save();
        
        // Example 20
        $curso20 = new Curso();
        $curso20->name = "GraphQL";
        $curso20->descripcion = "API Development with GraphQL";
        $curso20->categoria = "desarrollo web";
        $curso20->save();
        
        // Example 21
        $curso21 = new Curso();
        $curso21->name = "Docker";
        $curso21->descripcion = "Containerization with Docker";
        $curso21->categoria = "devops";
        $curso21->save();
        
        // Example 22
        $curso22 = new Curso();
        $curso22->name = "Kubernetes";
        $curso22->descripcion = "Orchestrating Containers with Kubernetes";
        $curso22->categoria = "devops";
        $curso22->save();
        
        // Example 23
        $curso23 = new Curso();
        $curso23->name = "AWS";
        $curso23->descripcion = "Cloud Computing with AWS";
        $curso23->categoria = "cloud computing";
        $curso23->save();
        
        // Example 24
        $curso24 = new Curso();
        $curso24->name = "Azure";
        $curso24->descripcion = "Microsoft Azure Fundamentals";
        $curso24->categoria = "cloud computing";
        $curso24->save();
        
        // Example 25
        $curso25 = new Curso();
        $curso25->name = "GCP";
        $curso25->descripcion = "Google Cloud Platform Essentials";
        $curso25->categoria = "cloud computing";
        $curso25->save();
        
        // Example 26
        $curso26 = new Curso();
        $curso26->name = "Linux";
        $curso26->descripcion = "Linux System Administration";
        $curso26->categoria = "sistemas operativos";
        $curso26->save();
        
        // Example 27
        $curso27 = new Curso();
        $curso27->name = "Cybersecurity";
        $curso27->descripcion = "Introduction to Cybersecurity";
        $curso27->categoria = "seguridad";
        $curso27->save();
        
        // Example 28
        $curso28 = new Curso();
        $curso28->name = "Ethical Hacking";
        $curso28->descripcion = "Ethical Hacking and Penetration Testing";
        $curso28->categoria = "seguridad";
        $curso28->save();
        
        // Example 29
        $curso29 = new Curso();
        $curso29->name = "Blockchain";
        $curso29->descripcion = "Blockchain Technology Basics";
        $curso29->categoria = "tecnología emergente";
        $curso29->save();
        
        // Example 30
        $curso30 = new Curso();
        $curso30->name = "IoT";
        $curso30->descripcion = "Internet of Things (IoT) Fundamentals";
        $curso30->categoria = "tecnología emergente";
        $curso30->save();
        
        // Example 31
        $curso31 = new Curso();
        $curso31->name = "AR/VR";
        $curso31->descripcion = "Augmented and Virtual Reality";
        $curso31->categoria = "tecnología emergente";
        $curso31->save();
        
        // Example 32
        $curso32 = new Curso();
        $curso32->name = "Big Data";
        $curso32->descripcion = "Big Data Analytics";
        $curso32->categoria = "ciencia de datos";
        $curso32->save();
        
        // Example 33
        $curso33 = new Curso();
        $curso33->name = "Hadoop";
        $curso33->descripcion = "Hadoop for Big Data Processing";
        $curso33->categoria = "ciencia de datos";
        $curso33->save();
        
        // Example 34
        $curso34 = new Curso();
        $curso34->name = "Spark";
        $curso34->descripcion = "Apache Spark for Big Data";
        $curso34->categoria = "ciencia de datos";
        $curso34->save();
        
        // Example 35
        $curso35 = new Curso();
        $curso35->name = "TensorFlow";
        $curso35->descripcion = "Deep Learning with TensorFlow";
        $curso35->categoria = "inteligencia artificial";
        $curso35->save();
        
        // Example 36
        $curso36 = new Curso();
        $curso36->name = "Pandas";
        $curso36->descripcion = "Data Analysis with Pandas";
        $curso36->categoria = "ciencia de datos";
        $curso36->save();
        
        // Example 37
        $curso37 = new Curso();
        $curso37->name = "Numpy";
        $curso37->descripcion = "Numerical Computing with Numpy";
        $curso37->categoria = "ciencia de datos";
        $curso37->save();
        
        // Example 38
        $curso38 = new Curso();
        $curso38->name = "Matplotlib";
        $curso38->descripcion = "Data Visualization with Matplotlib";
        $curso38->categoria = "ciencia de datos";
        $curso38->save();
        
        // Example 39
        $curso39 = new Curso();
        $curso39->name = "Seaborn";
        $curso39->descripcion = "Statistical Data Visualization with Seaborn";
        $curso39->categoria = "ciencia de datos";
        $curso39->save();
        
        // Example 40
        $curso40 = new Curso();
        $curso40->name = "Django";
        $curso40->descripcion = "Web Development with Django";
        $curso40->categoria = "desarrollo web";
        $curso40->save();
        
        // Example 41
        $curso41 = new Curso();
        $curso41->name = "Flask";
        $curso41->descripcion = "Microservices with Flask";
        $curso41->categoria = "desarrollo web";
        $curso41->save();
        
        // Example 42
        $curso42 = new Curso();
        $curso42->name = "Spring Boot";
        $curso42->descripcion = "Java Spring Boot for Web Applications";
        $curso42->categoria = "desarrollo web";
        $curso42->save();
        
        // Example 43
        $curso43 = new Curso();
        $curso43->name = "Hibernate";
        $curso43->descripcion = "Java ORM with Hibernate";
        $curso43->categoria = "desarrollo web";
        $curso43->save();
        
        // Example 44
        $curso44 = new Curso();
        $curso44->name = "Laravel";
        $curso44->descripcion = "Laravel for PHP Developers";
        $curso44->categoria = "desarrollo web";
        $curso44->save();
        
        // Example 45
        $curso45 = new Curso();
        $curso45->name = "Symfony";
        $curso45->descripcion = "Symfony Framework for PHP";
        $curso45->categoria = "desarrollo web";
        $curso45->save();
        
        // Example 46
        $curso46 = new Curso();
        $curso46->name = "ASP.NET";
        $curso46->descripcion = "Web Development with ASP.NET";
        $curso46->categoria = "desarrollo web";
        $curso46->save();
        
        // Example 47
        $curso47 = new Curso();
        $curso47->name = "Rust";
        $curso47->descripcion = "Systems Programming with Rust";
        $curso47->categoria = "programación";
        $curso47->save();
        
        // Example 48
        $curso48 = new Curso();
        $curso48->name = "Go";
        $curso48->descripcion = "Concurrent Programming with Go";
        $curso48->categoria = "programación";
        $curso48->save();
        
        // Example 49
        $curso49 = new Curso();
        $curso49->name = "TypeScript";
        $curso49->descripcion = "TypeScript for JavaScript Developers";
        $curso49->categoria = "desarrollo web";
        $curso49->save();
        
        // Example 50
        $curso50 = new Curso();
        $curso50->name = "Selenium";
        $curso50->descripcion = "Automated Testing with Selenium";
        $curso50->categoria = "pruebas de software";
        $curso50->save();
    }
}
