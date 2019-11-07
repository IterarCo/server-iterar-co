    @php
        $mod_companies = array(

            'companies' => array(
                "name_es" => "Compañias",
                "url" => "/resources/companies"
            ),

            "deparments" => array(
                "name_es" => "Departamentos",
                "url" => "/resources/companies/departments"
            ),

            "organization_charts" => array(
                "name_es" => "Organigramas",
                "url" => "/resources/companies/organization-charts"
            )
        );

        $mod_users = array(

            'users' => array(
                "name_es" => "Usuarios",
                "url" => "/resources/companies"
            ),

            "roles" => array(
                "name_es" => "Roles",
                "url" => "/resources/companies/departments"
            ),
        );

         $mod_courses = array(

            'courses' => array(
                "name_es" => "Cursos",
                "url" => "/resources/courses"
            ),

            'courses_classes' => array(
                "name_es" => "Clases",
                "url" => "/resources/coures/classes"
            ),

            "course_class_resources" => array(
                "name_es" => "Recursos",
                "url" => "/resources/course/resources"
            ),

            "course_exam" => array(
                "name_es" => "Examenes",
                "url" => "/resources/courses/exams"
            ),

            "course_exam_result" => array(
                "name_es" => "Resultados",
                "url" => "/resources/courses/exams/results"
            ),

            "course_question" => array(
                "name_es" => "Preguntas",
                "url" => "/resources/courses/questions"
            )
        );

        $modules = array(
            0 => [ "name" => "Compañias", "icon" => "fas fa-building",  "submodules" => $mod_companies],
            1 => [ "name" => "Usuarios", "icon" => "fas fa-users", "submodules" => $mod_users],
            2 => [ "name" => "Cursos", "icon" => "fas fa-graduation-cap", "submodules" =>  $mod_courses]
        );

    @endphp

     <!-- Heading -->
      <div class="sidebar-heading">
        Modulos
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      @foreach ($modules as $module)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapseTwo">
            <i class="{{ $module["icon"] }}"></i>
            <span>{{{ $module["name"] }}}</span>
            </a>
            <div id="collapse{{$loop->iteration}}" class="collapse" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                @foreach ($module["submodules"] as $submodule)
                    <a class="collapse-item" href="{{$submodule["url"]}}"> {{$submodule["name_es"]}} </a>
                @endforeach

            </div>
            </div>
        </li>
      @endforeach



      <!-- Nav Item - Utilities Collapse Menu -->


      <!-- Divider -->
      <hr class="sidebar-divider">
