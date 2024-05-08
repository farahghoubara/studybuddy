<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'header' => 'Software is defined as',
                'subject_id' => 1,
                'explanation' => 'Software is a collection of programmes; it also includes documentation and data setup to enable the programmes to function. Microsoft windows, excel, word, powerpoint, etc. are a few examples of software.',
            ],
            [
                'header' => 'Who wrote "What is Software Engineering?',
                'subject_id' => 1,
                'explanation' => 'Software engineering is the application of engineering principles to the design, development, and support of software and it helps to solve the challenges of low-quality software projects.',
            ],
            [
                'header' => 'Who wrote "Who is the father of Software Engineering?',
                'subject_id' => 1,
                'explanation' => 'Watts S. Humphrey created the Software Process Program at Carnegie Mellon University’s Institute (SEI) in the 1980s, and served as its director from 1986 through the early 1990s. This program was designed to help participants understand and manage the software developement process.',
            ],
            [
                'header' => 'Who wrote "What are the features of Software Code?',
                'subject_id' => 1,
                'explanation' => 'Software code should be written in a clear, succinct, and easy-to-understand way. Simplicity should be preserved in the program code’s organization, implementation, and design. These codes should be constructed in such a way that software components (such as files and functions) are readily available. The software may be broken down into numerous parts to make it easier to comprehend and troubleshoot.',
            ],
            [
                'header' => '____ is a software development activity that is not a part of software processes.',
                'subject_id' => 1,
                'explanation' => 'A software dependency is an external independent library that can range in size from a single file to numerous files and directories arranged into packages to accomplish a specified purpose and is an attribute and not an engineering activity for process.',
            ],
            [
                'header' => 'Define Agile scrum methodology.',
                'subject_id' => 1,
                'explanation' => 'Agile scrum methodology is a style of project management that emphasizes incremental progress. Each iteration is divided into two to four-week sprints, with the goal of completing the most important features first and delivering a possibly deliverable product at the end of each sprint.',
            ],
            [
                'header' => 'CASE stands for',
                'subject_id' => 1,
                'explanation' => 'The CASE tool’s purpose is to make the work of software development and maintenance easier and more reliable.',
            ],
            [
                'header' => '____ is defined as the process of generating analysis and designing documents?',
                'subject_id' => 1,
                'explanation' => 'The method of reverse engineering is used to uncover difficult, unknown, and hidden information about a software system.',
            ],
            [
                'header' => 'The activity that distributes estimated effort across the planned project duration by allocating the effort to specific software developing tasks is ____',
                'subject_id' => 1,
                'explanation' => 'Software project scheduling is the process of allocating anticipated effort to specific software developing activities and distributing it across the project’s intended length. A macroscopic schedule is created in the early phases of project planning.',
            ],
            [
                'header' => '10. What is a Functional Requirement?',
                'subject_id' => 1,
                'explanation' => 'A functional requirement is a specification that describes a system or one of its components. It specifies the tasks the program must complete. A function is made up of three parts: inputs, behavior, and outputs.',
            ],
            [
                'header' => 'Why do bugs and failures occur in software?',
                'subject_id' => 1,
                'explanation' => 'Software businesses are in charge of establishing policies and creating a working environment for software development, therefore they are a component of the software development process. Bugs from developers are nothing new.',
            ],
            [
                'header' => 'Attributes of good software is ____',
                'subject_id' => 1,
                'explanation' => 'Good software should provide the functionality and maintainability that are necessary. Software development is a must, not an option. Along with this software also additional attributes like usability, efficiency, reliability, accuracy, robustness, integrity, etc.',
            ],
            [
                'header' => 'The Cleanroom philosophy was proposed by ___',
                'subject_id' => 1,
                'explanation' => 'Mills, Dyer, and Linger initially suggested the Cleanroom concept in the 1980s. The main goal of the philosophy of cleanroom philosophy is to develop software with zero defects.',
            ],
            [
                'header' => '14. What does SDLC stands for?',
                'subject_id' => 1,
                'explanation' => 'The Software Development Life Cycle (SDLC) is a method for designing, developing, and testing high-quality software. The software developed to meet or exceed customer expectations must have an SDLC designed to complete the software on time and on budget.',
            ],
            [
                'header' => 'Who proposed the spiral model?',
                'subject_id' => 1,
                'explanation' => 'The spiral model by Boehm, is a software process model that combines prototyping’s iterative characteristic with the linear sequential model’s regulated and systematic elements. It implements the capability of quick production of new software versions.',
            ],
            [
                'header' => '______ is not among the eight principles followed by the Software Code of Ethics and Professional Practice.',
                'subject_id' => 1,
                'explanation' => ' The rest are software ethical provisions; the environment does not focus on individual clauses or their importance in relation to the topic. The eight principles that should be followed by the Software code is:
                1. PUBLIC
                2. CLIENT AND EMPLOYER
                3. PRODUCT
                4. JUDGMENT
                5. MANAGEMENT
                6. PROFESSION
                7. COLLEAGUES
                8. SELF
                ',
            ],
            [
                'header' => 'Which of the following are CASE tools?',
                'subject_id' => 1,
                'explanation' => 'CASE tools can be divided into Central Repository, Integrated Case Tools, Upper Case Tools, and Lower Case Tools based on their use at a particular SDLC stage.',
            ],
            [
                'header' => '______ suits the Manifesto for Agile Software Development.',
                'subject_id' => 1,
                'explanation' => 'None.',
            ],
            [
                'header' => 'Software patch is defined as ______',
                'subject_id' => 1,
                'explanation' => 'When a vulnerability is discovered, a software patch is applied to the outdated version as an emergency repair. To repair a vulnerability or flaw discovered after an application or software has been released is referred to as software patching.',
            ],
            [
                'header' => '____ software development team has no permanent leader.',
                'subject_id' => 1,
                'explanation' => 'Team members Communicate among themselves horizontally. There is no permanent leader in the team and a team of software engineers coordinates among themselves temporarily to perform the task.',
            ],
            [
                'header' => 'What is a data structure?',
                'subject_id' => 2,
                'explanation' => ' A data structure is a way to store and organize data efficiently, enhancing access and manipulation, unlike programming languages, algorithms, or computer hardware.',
            ],
            [
                'header' => 'What are the disadvantages of arrays?',
                'subject_id' => 2,
                'explanation' => 'Arrays are of fixed size. If we insert elements less than the allocated size, unoccupied positions can’t be used again. Wastage will occur in memory.',
            ],
            [
                'header' => 'Which data structure is used for implementing recursion?',
                'subject_id' => 2,
                'explanation' => 'Stacks are used for the implementation of Recursion.',
            ],
            [
                'header' => 'The data structure required to check whether an expression contains a balanced parenthesis is?',
                'subject_id' => 2,
                'explanation' => 'The stack is a simple data structure in which elements are added and removed based on the LIFO principle. Open parenthesis is pushed into the stack and a closed parenthesis pops out elements till the top element of the stack is its corresponding open parenthesis. If the stack is empty, parenthesis is balanced otherwise it is unbalanced.',
            ],
            [
                'header' => 'Which of the following is not the application of stack?',
                'subject_id' => 2,
                'explanation' => 'Data transfer between the two asynchronous process uses the queue data structure for synchronisation. The rest are all stack applications.',
            ],
            [
                'header' => 'Which data structure is needed to convert infix notation to postfix notation?',
                'subject_id' => 2,
                'explanation' => 'The Stack data structure is used to convert infix expression to postfix expression. The purpose of stack is to reverse the order of the operators in the expression. It also serves as a storage structure, as no operator can be printed until both of its operands have appeared.',
            ],
            [
                'header' => 'What is the value of the postfix expression 6 3 2 4 + – *?',
                'subject_id' => 2,
                'explanation' => 'Postfix Expression is (6*(3-(2+4))) which results -18 as output.',
            ],
            [
                'header' => 'What data structure would you mostly likely see in non recursive implementation of a recursive algorithm?',
                'subject_id' => 2,
                'explanation' => 'In recursive algorithms, the order in which the recursive process comes back is the reverse of the order in which it goes forward during execution. The compiler uses the stack data structure to implement recursion. In the forwarding phase, the values of local variables, parameters and the return address are pushed into the stack at each recursion level. In the backing-out phase, the stacked address is popped and used to execute the rest of the code.',
            ],
            [
                'header' => 'Which of the following statement(s) about stack data structure is/are NOT correct?',
                'subject_id' => 2,
                'explanation' => 'Stack follows LIFO.',
            ],
            [
                'header' => 'The data structure required for Breadth First Traversal on a graph is?',
                'subject_id' => 2,
                'explanation' => ' In Breadth First Search Traversal, BFS, starting vertex is first taken and adjacent vertices which are unvisited are also taken. Again, the first vertex which was added as an unvisited adjacent vertex list will be considered to add further unvisited vertices of the graph. To get the first unvisited vertex we need to follows First In First Out principle. Queue uses FIFO principle.',
            ],
            [
                'header' => 'The prefix form of A-B/ (C * D ^ E) is?',
                'subject_id' => 2,
                'explanation' => 'Infix Expression is A-B/(C*D^E)
                This can be written as: A-(B/(C*(D^E)))
                Thus prefix expression is -A/B*C^DE.',
            ],
            [
                'header' => 'Which of the following points is/are not true about Linked List data structure when it is compared with an array?',
                'subject_id' => 2,
                'explanation' => 'To access an element in a linked list, we need to traverse every element until we reach the desired element. This will take more time than arrays as arrays provide random access to its elements.',
            ],
            [
                'header' => 'Which data structure is based on the Last In First Out (LIFO) principle?',
                'subject_id' => 2,
                'explanation' => 'The data structure that follows the Last In First Out (LIFO) principle is the Stack. It operates like a stack of objects, making it suitable for specific-order management.',
            ],
            [
                'header' => 'Which of the following application makes use of a circular linked list?',
                'subject_id' => 2,
                'explanation' => 'Generally, round robin fashion is employed to allocate CPU time to resources which makes use of the circular linked list data structure. Recursive function calls use stack data structure. Undo Operation in text editor uses doubly linked lists. Hash tables uses singly linked lists.',
            ],
            [
                'header' => 'What is a bit array?',
                'subject_id' => 2,
                'explanation' => 'It compactly stores bits and exploits bit-level parallelism.',
            ],
            [
                'header' => 'Which of the following tree data structures is not a balanced binary tree?',
                'subject_id' => 2,
                'explanation' => 'All the tree data structures given in options are balanced, but B-tree can have more than two children.',
            ],
            [
                'header' => 'Which of the following is not the type of queue?',
                'subject_id' => 2,
                'explanation' => 'Queue always has two ends. So, single ended queue is not the type of queue.',
            ],
            [
                'header' => 'Which of the following data structures can be used for parentheses matching?',
                'subject_id' => 2,
                'explanation' => 'For every opening brace, push it into the stack, and for every closing brace, pop it off the stack. Do not take action for any other character. In the end, if the stack is empty, then the input has balanced parentheses.',
            ],
            [
                'header' => 'Which algorithm is used in the top tree data structure?',
                'subject_id' => 2,
                'explanation' => 'Top tree is a type of data structure which is based on unrooted dynamic binary tree and is used to solve path related problems. It allows an algorithm called divide and conquer.',
            ],
            [
                'header' => 'What is the need for a circular queue?',
                'subject_id' => 2,
                'explanation' => 'In a linear queue, dequeue operation causes the starting elements of the array to be empty, and there is no way you can use that space, while in a circular queue, you can effectively use that space. Priority queue is used to delete the elements based on their priority. Higher priority elements will be deleted first whereas lower priority elements will be deleted next. Queue data structure always follows FIFO principle.',
            ],
            [
                'header' => 'What is the full form of DBMS?',
                'subject_id' => 3,
                'explanation' => 'DBMS is abbreviated as Database Management System. Database Management System stores the data and allows authorized users to manipulate and modify the data.',
            ],
            [
                'header' => 'What is a database?',
                'subject_id' => 3,
                'explanation' => 'It is defined as an organized collection of data or information for easy access, updating, and management in a computer.',
            ],
            [
                'header' => 'What is DBMS?',
                'subject_id' => 3,
                'explanation' => 'DBMS is nothing but a storehouse wherein the authorized user can create a database to store, modify or retrieve the organized data in the table. It can be modified or retrieved by users who have access to DBMS only.',
            ],
            [
                'header' => 'Who created the first DBMS?',
                'subject_id' => 3,
                'explanation' => 'Charles Bachman along with his team invented the first DBMS known as Integrated Data Store (IDS).',
            ],
            [
                'header' => 'Which type of data can be stored in the database?',
                'subject_id' => 3,
                'explanation' => 'The reason for creating the database management system was to store large data and these data can be of any form image, text, audio, or video files, etc. DBMS allows the users to store and access the data of any format.',
            ],
            [
                'header' => 'In which of the following formats data is stored in the database management system?',
                'subject_id' => 3,
                'explanation' => 'The data is stored in a table format intended to manage the storage of data and manipulate stored data to generate information.',
            ],
            [
                'header' => 'Which of the following is not a type of database?',
                'subject_id' => 3,
                'explanation' => 'Different types are:
            1) Centralized
            2) Distributed
            3) Relational
            4) NoSQL
            5) Cloud
            6) Object-oriented
            7) Hierarchical
            8) Network',
            ],
            [
                'header' => 'Which of the following is not an example of DBMS?',
                'subject_id' => 3,
                'explanation' => 'MySQL, Microsoft Access, IBM DB2 are database management systems while Google is a search engine. MySQL is a Linux-based database management system, Microsoft Access is a tool that is a part of Microsoft Office used to store data, IBM DB2 is a database management system developed by IBM. Google’s Bigtable is the database that runs Google’s Internet search, Google Maps, YouTube, Gmail, and other products.',
            ],
            [
                'header' => 'Which of the following is not a feature of DBMS?',
                'subject_id' => 3,
                'explanation' => '"Single-user Access only” is not a feature of DBMS. DBMS allows multiple users to access and manipulate the database concurrently. It provides mechanisms to handle concurrent access and ensure data consistency and integrity among multiple users.
            The important features of a database management system are:

            Minimum Duplication and Redundancy of Data
            High Level of Security
            Mulitple-user Access
            Support ACID Property',
            ],
            [
                'header' => 'Which of the following is a feature of the database?',
                'subject_id' => 3,
                'explanation' => 'The important features are:
            1) Provides backup for the data stored by the user and the user can retrieve the data whenever required.
            2) Provides User-interface to access the data.
            3) Only authorized users can access the stored data.
            4) Data is stored in one central location but multiple authorized users can access the data.',
            ],
            [
                'header' => 'Which of the following is not a function of the database?',
                'subject_id' => 3,
                'explanation' => 'It allows authorized users to update, store, manipulate, or access data. Since data is stored in table format it is easy to access the data and perform the required functions. It also removes duplicate and redundant data.',
            ],
            [
                'header' => 'Which of the following is a function of the DBMS?',
                'subject_id' => 3,
                'explanation' => 'The purpose of creating DBMS was to store the data. The data stored in the database management system can be can accessed by multiple users if the access is provided. The data stored will be accurate and complete hence providing data integrity.',
            ],
            [
                'header' => 'Which of the following is a component of the DBMS?',
                'subject_id' => 3,
                'explanation' => 'The components of DBMS are as follows:
            1) Hardware: Like a hard drive, monitor, etc.
            2) Software: Provides a user interface
            3) Data Manager: Manages operations of DBMS.
            4) Data: The collection of information on the DB is known as data.
            5) Data Languages: Languages like DDL, DML, DAL, and DCL allow to perform operations like creating, modifying, storing, or retrieving data.',
            ],
            [
                'header' => 'Which of the following is known as a set of entities of the same type that share same properties, or attributes?',
                'subject_id' => 3,
                'explanation' => 'In the actual world, an entity is a distinct “thing” or “object” from all other objects. For example: Each employee of an organization is an entity.',
            ],
            [
                'header' => 'What is information about data called?',
                'subject_id' => 3,
                'explanation' => 'Information about data is known as Metadata. Metadata describes the data in detail by providing additional information like type, length of the data, etc. Metadata helps the user to understand the data.',
            ],
            [
                'header' => 'What does an RDBMS consist of?',
                'subject_id' => 3,
                'explanation' => 'It consists of a collection of tables i.e., the data is organized in tabular format. The columns of the relation are known as Fields and rows of the relation are known as Records. Constraints in a relation are known as Keys.',
            ],
            [
                'header' => 'The values appearing in given attributes of any tuple in the referencing relation must likewise occur in specified attributes of at least one tuple in the referenced relation, according to _______ integrity constraint.',
                'subject_id' => 3,
                'explanation' => 'Consider 2 relations r1 and r2. r1 may include among its attributes the primary key of relation r2. This attribute is called a foreign key from r1, referencing r2. The relation r1 is also called the referencing relation of the foreign key dependency, and r2 is called the referenced relation of the foreign key.',
            ],
            [
                'header' => '_____ is a hardware component that is most important for the operation of a database management system.',
                'subject_id' => 3,
                'explanation' => 'Since all the data are stored in form of memory in the disk, a high speed, and large-capacity disk is required for the operation of the database management system.',
            ],
            [
                'header' => 'The DBMS acts as an interface between ______ and ______ of an enterprise-class system.',
                'subject_id' => 3,
                'explanation' => 'A database management system is an application that acts as an interface between the user and the database. The user interacts with the application to access data.',
            ],
            [
                'header' => 'The ability to query data, as well as insert, delete, and alter tuples, is offered by ____',
                'subject_id' => 3,
                'explanation' => 'A query is a request for data or information. Relational Schema is the design and structure of the relation. DDL consists of commands that help in modifying. DML performs the change in the values of the relation.',
            ],
            [
                'header' => 'What is an operating system?',
                'subject_id' => 4,
                'explanation' => 'An Operating System acts as an intermediary between user/user applications/application programs and hardware. It is a program that manages hardware resources. It provides services to application programs.',
            ],
            [
                'header' => 'What is the main function of the command interpreter?',
                'subject_id' => 4,
                'explanation' => 'The main function of a command interpreter is to get and execute the next user-specified command. Command Interpreter checks for valid command and then runs that command else it will throw an error.',
            ],
            [
                'header' => 'In Operating Systems, which of the following is/are CPU scheduling algorithms?',
                'subject_id' => 4,
                'explanation' => 'In Operating Systems, CPU scheduling algorithms are: i) First Come First Served scheduling ii) Shortest Job First scheduling iii) Priority scheduling iv) Round Robin scheduling v) Multilevel Queue scheduling vi) Multilevel Feedback Queue scheduling All of these scheduling algorithms have their own advantages and disadvantages.',
            ],
            [
                'header' => 'To access the services of the operating system, the interface is provided by the ___',
                'subject_id' => 4,
                'explanation' => 'To access services of the Operating System an interface is provided by the System Calls. Generally, these are functions written in C and C++. Open, Close, Read, Write are some of the most prominently used system calls.',
            ],
            [
                'header' => 'CPU scheduling is the basis of ___',
                'subject_id' => 4,
                'explanation' => 'None.',
            ],
            [
                'header' => 'Which one of the following is not true?',
                'subject_id' => 4,
                'explanation' => 'Kernel is the first program that is loaded in memory when OS is loading as well as it remains in memory till OS is running. Kernel is the core part of the OS which is responsible for managing resources, allowing multiple processes to use the resources and provide services to various processes. Kernel modules can be loaded and unloaded in run-time i.e. in running OS.',
            ],
            [
                'header' => 'Which one of the following errors will be handle by the operating system?',
                'subject_id' => 4,
                'explanation' => 'All the mentioned errors are handled by OS. The OS is continuously monitoring all of its resources. Also, the OS is constantly detecting and correcting errors.',
            ],
            [
                'header' => 'Where is the operating system placed in the memory?',
                'subject_id' => 4,
                'explanation' => 'None.',
            ],
            [
                'header' => 'If a process fails, most operating system write the error information to a __',
                'subject_id' => 4,
                'explanation' => 'If a process fails, most operating systems write the error information to a log file. Log file is examined by the debugger, to find out what is the actual cause of that particular problem. Log file is useful for system programmers for correcting errors.',
            ],
            [
                'header' => 'Which one of the following is not a real time operating system?',
                'subject_id' => 4,
                'explanation' => 'VxWorks, QNX & RTLinux are real-time operating systems. Palm OS is a mobile operating system. Palm OS is developed for Personal Digital Assistants (PDAs).',
            ],
            [
                'header' => 'What does OS X has?',
                'subject_id' => 4,
                'explanation' => 'OS X has a hybrid kernel. Hybrid kernel is a combination of two different kernels. OS X is developed by Apple and originally it is known as Mac OS X.',
            ],
            [
                'header' => 'In operating system, each process has its own __',
                'subject_id' => 4,
                'explanation' => 'In Operating Systems, each process has its own address space which contains code, data, stack, and heap segments or sections. Each process also has a list of files that is opened by the process as well as all pending alarms, signals, and various signal handlers.',
            ],
            [
                'header' => 'In a timeshare operating system, when the time slot assigned to a process is completed, the process switches from the current state to?',
                'subject_id' => 4,
                'explanation' => 'In a time-sharing operating system, when the time slot given to a process is completed, the process goes from the running state to the Ready State. In a time-sharing operating system, unit time is defined for sharing CPU, it is called a time quantum or time slice. If a process takes less than 1 time quantum, then the process itself releases the CPU.',
            ],
            [
                'header' => 'Cascading termination refers to the termination of all child processes if the parent process terminates __',
                'subject_id' => 4,
                'explanation' => 'Cascading termination refers to the termination of all child processes if the parent process terminates Normally or Abnormally. Some systems don’t allow child processes to exist if the parent process has terminated. Cascading termination is normally initiated by the operating system.',
            ],
            [
                'header' => 'When a process is in a “Blocked” state waiting for some I/O service. When the service is completed, it goes to the __',
                'subject_id' => 4,
                'explanation' => 'Suppose that a process is in “Blocked” state waiting for some I/O service. When the service is completed, it goes to the ready state. Process never goes directly to the running state from the waiting state. Only processes which are in ready state go to the running state whenever CPU allocated by operating system.',
            ],
            [
                'header' => 'Transient operating system code is a code that __',
                'subject_id' => 4,
                'explanation' => 'None.',
            ],
            [
                'header' => 'The portion of the process scheduler in an operating system that dispatches processes is concerned with __',
                'subject_id' => 4,
                'explanation' => 'None.',
            ],
            [
                'header' => 'The FCFS algorithm is particularly troublesome for __',
                'subject_id' => 4,
                'explanation' => 'In a time sharing system, each user needs to get a share of the CPU at regular intervals.',
            ],
            [
                'header' => 'For an effective operating system, when to check for deadlock?',
                'subject_id' => 4,
                'explanation' => 'In an effective operating system, we must verify the deadlock each time a request for resources is made at fixed time intervals.',
            ],
            [
                'header' => 'A deadlock avoidance algorithm dynamically examines the __ to ensure that a circular wait condition can never exist.',
                'subject_id' => 4,
                'explanation' => 'Resource allocation states are used to maintain the availability of the already and current available resources.',
            ],[
                'header' => 'Who invented OOP?',
                'subject_id' => 5,
                'explanation' => 'Alan Kay invented OOP, Andrea Ferro was a part of SmallTalk Development. Dennis invented C++ and Adele Goldberg was in team to develop SmallTalk but Alan actually had got rewarded for OOP.',
            ],
            [
                'header' => 'Which is not a feature of OOP in general definitions?',
                'subject_id' => 5,
                'explanation' => 'Duplicate/Redundant data is dependent on programmer and hence can’t be guaranteed by OOP. Code reusability is done using inheritance. Modularity is supported by using different code files and classes. Codes are more efficient because of features of OOP.',
            ],
            [
                'header' => 'Which was the first purely object oriented programming language developed?',
                'subject_id' => 5,
                'explanation' => 'SmallTalk was the first programming language developed which was purely object oriented. It was developed by Alan Kay. OOP concept came into the picture in 1970’s.',
            ],
            [
                'header' => 'When OOP concept did first came into picture?',
                'subject_id' => 5,
                'explanation' => 'OOP first came into picture in 1970’s by Alan and his team. Later it was used by some programming languages and got implemented successfully, SmallTalk was first language to use pure OOP and followed all rules strictly.',
            ],
            [
                'header' => 'Which feature of OOP indicates code reusability?',
                'subject_id' => 5,
                'explanation' => 'Inheritance indicates the code reusability. Encapsulation and abstraction are meant to hide/group data into one element. Polymorphism is to indicate different tasks performed by a single entity.',
            ],
            [
                'header' => 'Which header file is required in C++ to use OOP?',
                'subject_id' => 5,
                'explanation' => 'We need not include any specific header file to use OOP concept in C++, only specific functions used in code need their respective header files to be included or classes should be defined if needed.',
            ],
            [
                'header' => 'Why Java is Partially OOP language?',
                'subject_id' => 5,
                'explanation' => 'As Java supports usual declaration of data variables, it is partial implementation of OOP. Because according to rules of OOP, object constructors must be used, even for declaration of variables.',
            ],
            [
                'header' => 'Which among the following doesn’t come under OOP concept?',
                'subject_id' => 5,
                'explanation' => 'Platform independence is not feature of OOP. C++ supports OOP but it’s not a platform independent language. Platform independence depends on the programming language.',
            ],
            [
                'header' => 'Which is the correct syntax of inheritance?',
                'subject_id' => 5,
                'explanation' => 'Firstly, keyword class should come, followed by the derived class name. Colon is must followed by access in which base class has to be derived, followed by the base class name. And finally the body of class. Semicolon after the body is also must.',
            ],
            [
                'header' => "Which feature of OOP is indicated by the following code?


        class student{  int marks;  };
        class topper:public student{  int age;  topper(int age){ this.age=age; } };",

                'subject_id' => 5,
                'explanation' => 'Encapsulation is indicated by use of classes. Inheritance is shown by inheriting the student class into topper class. Polymorphism is not shown here because we have defined the constructor in the topper class but that doesn’t mean that default constructor is overloaded.',
            ],
            [
                'header' => 'The feature by which one object can interact with another object is ___',
                'subject_id' => 5,
                'explanation' => 'The interaction between two object is called the message passing feature. Data transfer is not a feature of OOP. Also, message reading is not a feature of OOP.',
            ],
            [
                'header' => 'Which among the following, for a pure OOP language, is true?',
                'subject_id' => 5,
                'explanation' => 'The language must follow all the rules of OOP to be called a purely OOP language. Even if a single OOP feature is not followed, then it’s known to be a partially OOP language.',
            ],
            [
                'header' => 'How many types of access specifiers are provided in OOP (C++)?',
                'subject_id' => 5,
                'explanation' => 'Only 3 types of access specifiers are available. Namely, private, protected and public. All these three can be used according to the need of security of members.',
            ],
            [
                'header' => 'In multilevel inheritance, which is the most significant feature of OOP used?',
                'subject_id' => 5,
                'explanation' => 'The classes using multilevel inheritance will use the code in all the subsequent subclasses if available. Hence the most significant feature among the options given is code reusability. This feature is generally intended to use the data values and reuse the redundant functions.',
            ],
            [
                'header' => 'What is encapsulation in OOP?',
                'subject_id' => 5,
                'explanation' => 'It is a way of combining both data members and member functions, which operate on those data members, into a single unit. We call it a class in OOP generally. This feature have helped us modify the structures used in C language to be upgraded into class in C++ and other languages.',
            ],
            [
                'header' => 'Which of the following is not true about polymorphism?',
                'subject_id' => 5,
                'explanation' => 'It never increases function definition overhead, one way or another if you don’t use polymorphism, you will use the definition in some other way, so it actually helps to write efficient codes.',
            ],
            [
                'header' => "Which constructor will be called from the object created in the below C++ code?

        class A
        {
            int i;
            A()
            {
                i=0; cout&lt;&lt;i;
            }
            A(int x=0)
            {
                i=x;  cout&lt;&lt;I;
            }
        };",

                'subject_id' => 5,
                'explanation' => 'When a default constructor is defined and another constructor with 1 default value argument is defined, creating object without parameter will create ambiguity for the compiler. The compiler won’t be able to decide which constructor should be called, hence compile time error.',
            ],
            [
                'header' => 'What is an abstraction in object-oriented programming?',
                'subject_id' => 5,
                'explanation' => 'It includes hiding the implementation part and showing only the required data and features to the user. It is done to hide the implementation complexity and details from the user. And to provide a good interface in programming.',
            ],
            [
                'header' => 'Which among the following can show polymorphism?',
                'subject_id' => 5,
                'explanation' => 'Only insertion operator can be overloaded among all the given options. And the polymorphism can be illustrated here only if any of these is applicable of being overloaded. Overloading is type of polymorphism.',
            ],
            [
                'header' => 'In which access should a constructor be defined, so that object of the class can be created in any function?',
                'subject_id' => 5,
                'explanation' => 'Constructor function should be available to all the parts of program where the object is to be created. Hence it is advised to define it in public access, so that any other function is able to create objects.',
            ],[
                'header' => 'What is web technology?',
                'subject_id' => 6,
                'explanation' => 'Web technology is a term that encompasses the tools, techniques, and standards used to create and deliver content on the World Wide Web. This includes markup languages like HTML and CSS, scripting languages like JavaScript, client-side technologies like HTML5 and CSS3, server-side technologies like PHP and Java, databases, networking protocols, and more.',
            ],
            [
                'header' => 'Which HTML tag is used to create a hyperlink?',
                'subject_id' => 6,
                'explanation' => 'The HTML tag <a> is used to create a hyperlink, which is a link to another web page or resource. The <a> tag has two main attributes: href and target. The href attribute specifies the URL of the linked resource, while the target attribute specifies whether the link should open in a new browser window or tab.',
            ],
            [
                'header' => 'Which of the following is not a web component element?',
                'subject_id' => 6,
                'explanation' => 'There are web components in HTML related technology which makes it possible to essentially create and use custom elements as if it were regular HTML. You can also create custom versions of standard HTML elements. Some of the elements are <shadow>, <content>, <element>, <template>, <slot>.',
            ],
            [
                'header' => 'Which of the following programming languages is commonly used for server-side scripting in web development?',
                'subject_id' => 6,
                'explanation' => 'HTML, CSS, and JavaScript play crucial roles in front-end development, focusing on the visual aspects of web pages, while PHP serves as the primary language for server-side scripting. It manages backend tasks such as database interactions, processing user input, and generating dynamic content.',
            ],
            [
                'header' => 'Which of the following is used to read a HTML page and render it?',
                'subject_id' => 6,
                'explanation' => 'A web browser (commonly referred to as a browser) is a software application for retrieving, presenting and traversing information resources on the World Wide Web.',
            ],
            [
                'header' => 'Which of the following is a popular front-end framework for building user interfaces in JavaScript?',
                'subject_id' => 6,
                'explanation' => 'Angular is a widely used front-end framework specifically designed for creating dynamic and interactive user interfaces in JavaScript.',
            ],
            [
                'header' => 'What application can one create even before the introduction of HTML5?',
                'subject_id' => 6,
                'explanation' => 'With the help of HTML5 and JavaScript it became possible to create excellent mobile applications, browser based games, web applications and many more other applications. Forms were already introduced before HTML5.',
            ],
            [
                'header' => 'Which of the following is not associated with web socket communication?',
                'subject_id' => 6,
                'explanation' => 'For opening WebSocket we call WebSocket constructor. The syntax is var conn=new WebSocket(‘ws://rtyyghj.websocket.org/echo’,[‘brush’, ‘xmpp’]); for using secure HTTP connections use https: ,ws: is the new URL scheme for connecting WebSockets. There is wss: also.',
            ],
            [
                'header' => 'Why are Images often used on the webpage?',
                'subject_id' => 6,
                'explanation' => 'Images are also used for better presentation of webpage. Any image can be turned into a link. Rather than putting text between the opening < a > tag and the closing < /a > tag, you simply place an image inside these tags.',
            ],
            [
                'header' => 'What is DOM?',
                'subject_id' => 6,
                'explanation' => 'The Document Object Model (DOM) is a cross-platform and language-independent convention for representing and interacting with objects in HTML, XHTML, and XML documents.',
            ],
            [
                'header' => 'What are tables in web programming?',
                'subject_id' => 6,
                'explanation' => 'Tables display information in rows and columns; they are commonly used to display all manner of data that fits in a grid such as train schedules, television listings, financial reports, and sports results.',
            ],
            [
                'header' => 'What does <td> stand for?',
                'subject_id' => 6,
                'explanation' => 'While a row is contained inside a < tr > element, each cell is then written inside the row element using a < td > element which stands for table data. If you are looking at a web page and want to know whether that page is using a table to control how the data is laid out, you can always look at the source for that page.',
            ],
            [
                'header' => 'Which element to used to give title to a table?',
                'subject_id' => 6,
                'explanation' => 'By using a <caption> element, rather than just describing the purpose of the table in a previous or subsequent paragraph, you are directly associating the content of the table with this description- and this association can be used by screen readers and by applications that process web pages (such as search engines).',
            ],
            [
                'header' => 'What are Forms in web programming?',
                'subject_id' => 6,
                'explanation' => 'Forms can look a lot like papers or database forms. A form is filled using text boxes, chechboxes, radiobuttons. For example, applying/order a product from online or it’s a google search result.',
            ],
            [
                'header' => 'What are Frames?',
                'subject_id' => 6,
                'explanation' => 'Browser gets divided into panes by Frame, with each pane containing a separate web page. The advantages are that they offer you where you can load and reload single panes without having to reload the entire contents of the browser window.',
            ],
            [
                'header' => 'Which HTML tag is used to create an ordered list in a webpage?',
                'subject_id' => 6,
                'explanation' => 'The <ol> tag is used to create an ordered list in a webpage. Ordered lists are lists where the items have a specific order or sequence. The items in an ordered list are typically numbered or lettered.',
            ],
            [
                'header' => 'Which font format is used in web pages?',
                'subject_id' => 6,
                'explanation' => 'WOFF is font format used in web pages. It was developed in 2009. It is essentially OpenType or TrueType with compression and additional metadata. The goal is to support font distribution from the server to client over the network with bandwidth constraints.',
            ],
            [
                'header' => 'Which HTML tag is used to create a form?',
                'subject_id' => 6,
                'explanation' => 'The HTML tag used to create a form is <form>. It’s used to define an area where users can input and submit data on a webpage. Inside the <form> tag, various input elements like <input>, <select>, and <textarea> are used to collect information from users. When users fill in the form and submit it, the data is sent to a server for processing or storage.',
            ],
            [
                'header' => 'Which of the following property is used to control the space between the border and content in a table?',
                'subject_id' => 6,
                'explanation' => 'The padding property is used to control the space between the border and content in a table. Example: table{border: 4px solid black;}',
            ],
            [
                'header' => 'Which of the following CSS Property controls how an element is positioned?',
                'subject_id' => 6,
                'explanation' => 'Controls how an element is positioned. When set to absolute or fixed, the element is removed completely from the normal flow of the document. When set to relative, the element is moved relative to its position in the normal flow, but a space is left where it would normally have been. The default value, static, means the element remains in the normal flow and is not positioned.',
            ],[
                'header' => 'What is the full form of “AI”?',
                'subject_id' => 7,
                'explanation' => 'AI is abbreviated as Artificial Intelligence. It is used to create systems or build machines to think and work like humans.',
            ],
            [
                'header' => 'What is Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Artificial Intelligence is the development of intelligent systems that work and react in the same way that humans do. Intelligence is a process or a component of the ability to achieve goals in the world. People, animals, and a few machines all have different types and degrees of intelligence.',
            ],
            [
                'header' => 'Who is the inventor of Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'John McCarthy was a pioneer in Artificial Intelligence research, helping to name the field and spending decades teaching computers to grasp concepts that are intuitive to humans.',
            ],
            [
                'header' => 'Which of the following is the branch of Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Machine learning is one of the important sub-areas of Artificial Intelligence likewise Neural Networks, Computer Vision, Robotics, and NLP are also the sub-areas. In machine learning, we build or train ML models to do certain tasks.',
            ],
            [
                'header' => 'What is the goal of Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Artificial Intelligence’s goal is to explain various sorts of intelligence.',
            ],
            [
                'header' => 'Which of the following is an application of Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Language understanding and problem-solving come under the NLP and Text Analysis area which involves text recognition and sentiment analysis of the text. NLP ML model is trained to mainly do the task which processes human language’s speech or text. For example voice assistant.',
            ],
            [
                'header' => 'In how many categories process of Artificial Intelligence is categorized?',
                'subject_id' => 7,
                'explanation' => 'It is categorized into 3 steps Sensing, Reasoning, Acting i) Sensing: Through the sensor taking in the data about the world ii) Reasoning: Reasoning is thinking or processing the data sensed by the sensor. iii) Action: On the basis of input and reasoning, acting is generating and controlling actions in the environment.',
            ],
            [
                'header' => 'Based on which of the following parameter Artificial Intelligence is categorized?',
                'subject_id' => 7,
                'explanation' => 'The two main categorizations of AI are based on the capability and functionality. Based on capability it is divided into Artificial Narrow Intelligence (ANI), Artificial General Intelligence (AGI), and Artificial Super Intelligence (ASI). Based on functionality it is divided into reactive machines, limited memory, theory of mind, and self-awareness.',
            ],
            [
                'header' => 'Which of the following is a component of Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Intelligence is intangible and is composed of mainly five techniques. Learning is the process of gaining knowledge by understanding, practicing, being taught, or experiencing one thing. Learning enhances the awareness of any topic, hence learning is one of the important components.',
            ],
            [
                'header' => 'What is the function of an Artificial Intelligence “Agent”?',
                'subject_id' => 7,
                'explanation' => 'A math function that converts a collection of perceptions into actions is known as the agent function. The function is implemented using agent software. An agent is responsible for the actions performed by the machine once it senses the environment.',
            ],
            [
                'header' => 'Which of the following is not the commonly used programming language for Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Perl is a scripting language. Whereas other programming languages are used to program AI machines.',
            ],
            [
                'header' => 'What is the name of the Artificial Intelligence system developed by Daniel Bobrow?',
                'subject_id' => 7,
                'explanation' => 'STUDENT is the name of the Artificial Intelligence system developed by Daniel Bobrow in 1964. Daniel Bobrow had used LISP programming language to write this AI program for his PhD thesis.',
            ],
            [
                'header' => 'What is the function of the system Student?',
                'subject_id' => 7,
                'explanation' => 'The system STUDENT developed by Daniel Bobrow was written in LISP to read and solve algebra word problems of high school books. This is referred as the achievement in the field of Natural Language Processing.',
            ],
            [
                'header' => 'Which of the following is not an application of artificial intelligence?',
                'subject_id' => 7,
                'explanation' => 'Face recognition system, Chatbots, and LIDAR are the various applications of AI in various fields like security system, business, automobiles etc. DBMS is used to store and manipulate data.',
            ],
            [
                'header' => 'Which of the following machine requires input from the humans but can interpret the outputs themselves?',
                'subject_id' => 7,
                'explanation' => 'Actuators are used in machines to convert energy from one form to another to perform a physical function. The sensor is a device that receives signals from the physical environment to detect the changes. Systems receive input from humans and interpret the outputs.',
            ],
            [
                'header' => '_ number of informed search method are there in Artificial Intelligence.',
                'subject_id' => 7,
                'explanation' => 'There are four types of informed search methods. The four types of informed search method are best-first search, Greedy best-first search, A* search and memory bounded heuristic search.',
            ],
            [
                'header' => 'The total number of proposition symbols in AI are __',
                'subject_id' => 7,
                'explanation' => 'There are totally 2 proposition symbols. The two proposition symbols are true and false.',
            ],
            [
                'header' => 'The total number of logical symbols in AI are __',
                'subject_id' => 7,
                'explanation' => 'There are totally five logical symbols. The five logical symbols are: a) Negation b) Conjunction c) Disjunction d) Implication e) Biconditional',
            ],
            [
                'header' => 'Which of the following are the approaches to Artificial Intelligence?',
                'subject_id' => 7,
                'explanation' => 'Strong AI is used to build machines that can truly reason and solve problems. Weak AI deals with building computer-based Artificial Intelligence that can act as if it were intelligent but cannot truly reason and solve problems. Applied approach creates commercially viable “smart” systems. In the Cognitive approach, a computer is used to test theories about how the human mind works.',
            ],
            [
                'header' => 'Face Recognition system is based on which type of approach?',
                'subject_id' => 7,
                'explanation' => 'Applied approach aims to produce commercially viable “smart” systems such as, for example, a security system that recognizes the faces of people to provide access. The applied approach has already enjoyed considerable success.',
            ],[
                'header' => 'Who developed Python Programming Language?',
                'subject_id' => 8,
                'explanation' => 'Python language is designed by a Dutch programmer Guido van Rossum in the Netherlands.',
            ],
            [
                'header' => 'Which type of Programming does Python support?',
                'subject_id' => 8,
                'explanation' => 'Python is an interpreted programming language, which supports object-oriented, structured, and functional programming.',
            ],
            [
                'header' => 'Is Python case sensitive when dealing with identifiers?',
                'subject_id' => 8,
                'explanation' => 'Case is always significant while dealing with identifiers in python.',
            ],
            [
                'header' => 'Which of the following is the correct extension of the Python file?',
                'subject_id' => 8,
                'explanation' => '‘.py’ is the correct extension of the Python file. Python programs can be written in any text editor. To save these programs we need to save in files with file extension ‘.py’.',
            ],
            [
                'header' => 'Is Python code compiled or interpreted?',
                'subject_id' => 8,
                'explanation' => 'Many languages have been implemented using both compilers and interpreters, including C, Pascal, and Python.',
            ],
            [
                'header' => 'All keywords in Python are in _',
                'subject_id' => 8,
                'explanation' => 'True, False and None are capitalized while the others are in lower case.',
            ],
            [
                'header' => 'What will be the value of the following Python expression? 4 + 3 % 5',
                'subject_id' => 8,
                'explanation' => 'The order of precedence is: %, +. Hence the expression above, on simplification results in 4 + 3 = 7. Hence the result is 7.',
            ],
            [
                'header' => 'Which of the following is used to define a block of code in Python language?',
                'subject_id' => 8,
                'explanation' => 'In Python, to define a block of code we use indentation. Indentation refers to whitespaces at the beginning of the line.',
            ],
            [
                'header' => 'Which keyword is used for function in Python language?',
                'subject_id' => 8,
                'explanation' => 'The def keyword is used to create, (or define) a function in python.',
            ],
            [
                'header' => 'Which of the following character is used to give single-line comments in Python?',
                'subject_id' => 8,
                'explanation' => 'To write single-line comments in Python use the Hash character (#) at the beginning of the line. It is also called number sign or pound sign. To write multi-line comments, close the text between triple quotes.',
            ],
            [
                'header' => 'What will be the output of the following Python code? i = 1 while True: if i%3 == 0: break print(i) i + = 1',
                'subject_id' => 8,
                'explanation' => 'SyntaxError, there shouldn’t be a space between + and = in +=.',
            ],
            [
                'header' => 'Which of the following functions can help us to find the version of python that we are currently working on?',
                'subject_id' => 8,
                'explanation' => 'The function sys.version can help us to find the version of python that we are currently working on. It also contains information on the build number and compiler used. For example, 3.5.2, 2.7.3 etc. this function also returns the current date, time, bits etc along with the version.',
            ],
            [
                'header' => 'Python supports the creation of anonymous functions at runtime, using a construct called __',
                'subject_id' => 8,
                'explanation' => 'Python supports the creation of anonymous functions (i.e. functions that are not bound to a name) at runtime, using a construct called lambda. Lambda functions are restricted to a single expression. They can be used wherever normal functions can be used.',
            ],
            [
                'header' => 'What is the order of precedence in python?',
                'subject_id' => 8,
                'explanation' => 'For order of precedence, just remember this PEMDAS (similar to BODMAS).',
            ],
            [
                'header' => 'What will be the output of the following Python code snippet if x=1? x<<2',
                'subject_id' => 8,
                'explanation' => 'The binary form of 1 is 0001. The expression x<<2 implies we are performing bitwise left shift on x. This shift yields the value: 0100, which is the binary form of the number 4.',
            ],
            [
                'header' => 'What does pip stand for python?',
                'subject_id' => 8,
                'explanation' => 'pip is a package manager for python. Which is also called Preferred Installer Program.',
            ],
            [
                'header' => 'Which of the following is true for variable names in Python?',
                'subject_id' => 8,
                'explanation' => 'Variable names can be of any length.',
            ],
            [
                'header' => 'What are the values of the following Python expressions? 2*(3*2) (2*3)*2 2*3*2',
                'subject_id' => 8,
                'explanation' => 'Expression 1 is evaluated as: 2*9, which is equal to 512. Expression 2 is evaluated as 82, which is equal to 64. The last expression is evaluated as 2(32). This is because the associativity of * operator is from right to left. Hence the result of the third expression is 512.',
            ],
            [
                'header' => 'Which of the following is the truncation division operator in Python?',
                'subject_id' => 8,
                'explanation' => '// is the operator for truncation division. It is called so because it returns only the integer part of the quotient, truncating the decimal part. For example: 20//3 = 6.',
            ],
            [
                'header' => 'What will be the output of the following Python code? l=[1, 0, 2, 0, \'hello\', \'\', []] list(filter(bool, l))',
                'subject_id' => 8,
                'explanation' => 'The code shown above returns a new list containing only those elements of the list l which do not amount to zero. Hence the output is: [1, 2, ‘hello’].',
            ],

        ];

        // Loop through the question data and create records in the database
        foreach ($questions as $questionData) {
            Question::create($questionData);
        }
    }
}
