<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'answer_sentence' => 'set of programs, documentation & configuration of data',
                'is_correct' => true,
                'question_id' => 1,
            ],
            [
                'answer_sentence' => 'set of programs',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer_sentence' => 'documentation and configuration of data',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 1,
            ],
            [
                'answer_sentence' => 'Application of engineering principles to the design a software',
                'is_correct' => true,
                'question_id' => 2,
            ],
            [
                'answer_sentence' => 'Designing a software',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer_sentence' => 'Testing a software',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer_sentence' => 'None of the above',
                'is_correct' => false,
                'question_id' => 2,
            ],
            [
                'answer_sentence' => 'Watts S. Humphrey',
                'is_correct' => true,
                'question_id' => 3,
            ],
            [
                'answer_sentence' => 'Margaret Hamilton',
                'is_correct' => false,
                'question_id' => 3,
            ],
            [
                'answer_sentence' => 'Alan Turing',
                'is_correct' => false,
                'question_id' => 3,
            ],
            [
                'answer_sentence' => 'Boris Beizer',
                'is_correct' => false,
                'question_id' => 3,
            ],
            [
                'answer_sentence' => 'Simplicity',
                'is_correct' => false,
                'question_id' => 4,
            ],
            [
                'answer_sentence' => 'Accessibility',
                'is_correct' => false,
                'question_id' => 4,
            ],
            [
                'answer_sentence' => 'Modularity',
                'is_correct' => false,
                'question_id' => 4,
            ],
            [
                'answer_sentence' => 'All of the above',
                'is_correct' => true,
                'question_id' => 4,
            ],
            [
                'answer_sentence' => 'Dependence',
                'is_correct' => false,
                'question_id' => 5,
            ],
            [
                'answer_sentence' => 'Specification',
                'is_correct' => false,
                'question_id' => 5,
            ],
            [
                'answer_sentence' => 'Development',
                'is_correct' => false,
                'question_id' => 5,
            ],
            [
                'answer_sentence' => 'Validation',
                'is_correct' => true,
                'question_id' => 5,
            ],
            [
                'answer_sentence' => 'project management that emphasizes incremental progress',
                'is_correct' => true,
                'question_id' => 6,
            ],
            [
                'answer_sentence' => 'project management that emphasizes decremental progress',
                'is_correct' => false,
                'question_id' => 6,
            ],
            [
                'answer_sentence' => 'project management that emphasizes neutral progress',
                'is_correct' => false,
                'question_id' => 6,
            ],
            [
                'answer_sentence' => 'project management that emphasizes no progress',
                'is_correct' => false,
                'question_id' => 6,
            ],
            [
                'answer_sentence' => 'Computer-Aided Software Engineering',
                'is_correct' => true,
                'question_id' => 7,
            ],
            [
                'answer_sentence' => 'Control Aided Science and Engineering',
                'is_correct' => false,
                'question_id' => 7,
            ],
            [
                'answer_sentence' => 'Cost Aided System Experiments',
                'is_correct' => false,
                'question_id' => 7,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 7,
            ],
            [
                'answer_sentence' => 'Reverse engineering',
                'is_correct' => true,
                'question_id' => 8,
            ],
            [
                'answer_sentence' => 'Re-engineering',
                'is_correct' => false,
                'question_id' => 8,
            ],
            [
                'answer_sentence' => 'Software re-engineering',
                'is_correct' => false,
                'question_id' => 8,
            ],
            [
                'answer_sentence' => 'Science and engineering',
                'is_correct' => false,
                'question_id' => 8,
            ],
            [
                'answer_sentence' => 'Project scheduling',
                'is_correct' => true,
                'question_id' => 9,
            ],
            [
                'answer_sentence' => 'Detailed schedule',
                'is_correct' => false,
                'question_id' => 9,
            ],
            [
                'answer_sentence' => 'Macroscopic schedule',
                'is_correct' => false,
                'question_id' => 9,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 9,
            ],
            [
                'answer_sentence' => 'specifies the tasks the program must complete',
                'is_correct' => true,
                'question_id' => 10,
            ],
            [
                'answer_sentence' => 'specifies the tasks the program should not complete',
                'is_correct' => false,
                'question_id' => 10,
            ],
            [
                'answer_sentence' => 'specifies the tasks the program must not work',
                'is_correct' => false,
                'question_id' => 10,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => false,
                'question_id' => 10,
            ],
            [
                'answer_sentence' => 'Because of both companies and Developers',
                'is_correct' => true,
                'question_id' => 11,
            ],
            [
                'answer_sentence' => 'Because of Developers',
                'is_correct' => false,
                'question_id' => 11,
            ],
            [
                'answer_sentence' => 'Because of companies',
                'is_correct' => false,
                'question_id' => 11,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 11,
            ],
            [
                'answer_sentence' => 'Maintainability & functionality',
                'is_correct' => true,
                'question_id' => 12,
            ],
            [
                'answer_sentence' => 'Development',
                'is_correct' => false,
                'question_id' => 12,
            ],
            [
                'answer_sentence' => 'Functionality',
                'is_correct' => false,
                'question_id' => 12,
            ],
            [
                'answer_sentence' => 'Maintainability',
                'is_correct' => false,
                'question_id' => 12,
            ],
            [
                'answer_sentence' => 'All of the Mentioned',
                'is_correct' => true,
                'question_id' => 13,
            ],
            [
                'answer_sentence' => 'Linger',
                'is_correct' => false,
                'question_id' => 13,
            ],
            [
                'answer_sentence' => 'Mills',
                'is_correct' => false,
                'question_id' => 13,
            ],
            [
                'answer_sentence' => 'Dyer',
                'is_correct' => false,
                'question_id' => 13,
            ],
            [
                'answer_sentence' => 'Software Development Life Cycle',
                'is_correct' => true,
                'question_id' => 14,
            ],
            [
                'answer_sentence' => 'System Design Life Cycle',
                'is_correct' => false,
                'question_id' => 14,
            ],
            [
                'answer_sentence' => 'Software Design Life Cycle',
                'is_correct' => false,
                'question_id' => 14,
            ],
            [
                'answer_sentence' => 'System Development Life cycle',
                'is_correct' => false,
                'question_id' => 14,
            ],
            [
                'answer_sentence' => 'Barry Boehm',
                'is_correct' => true,
                'question_id' => 15,
            ],
            [
                'answer_sentence' => 'Pressman',
                'is_correct' => false,
                'question_id' => 15,
            ],
            [
                'answer_sentence' => 'Royce',
                'is_correct' => false,
                'question_id' => 15,
            ],
            [
                'answer_sentence' => 'IBM',
                'is_correct' => false,
                'question_id' => 15,
            ],
            [
                'answer_sentence' => 'PROFESSION',
                'is_correct' => true,
                'question_id' => 16,
            ],
            [
                'answer_sentence' => 'PUBLIC',
                'is_correct' => false,
                'question_id' => 16,
            ],
            [
                'answer_sentence' => 'PRODUCT',
                'is_correct' => false,
                'question_id' => 16,
            ],
            [
                'answer_sentence' => 'ENVIRONMENT',
                'is_correct' => false,
                'question_id' => 16,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => true,
                'question_id' => 17,
            ],
            [
                'answer_sentence' => 'Central Repository',
                'is_correct' => false,
                'question_id' => 17,
            ],
            [
                'answer_sentence' => 'Integrated Case Tools',
                'is_correct' => false,
                'question_id' => 17,
            ],
            [
                'answer_sentence' => 'Upper Case Tools',
                'is_correct' => false,
                'question_id' => 17,
            ],
            [
                'answer_sentence' => 'Customer collaboration',
                'is_correct' => false,
                'question_id' => 18,
            ],
            [
                'answer_sentence' => 'Individuals and interactions',
                'is_correct' => false,
                'question_id' => 18,
            ],
            [
                'answer_sentence' => 'Working software',
                'is_correct' => false,
                'question_id' => 18,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => True,
                'question_id' => 18,
            ],
            [
                'answer_sentence' => 'Emergency Fix',
                'is_correct' => true,
                'question_id' => 19,
            ],
            [
                'answer_sentence' => 'Daily or routine Fix',
                'is_correct' => false,
                'question_id' => 19,
            ],
            [
                'answer_sentence' => 'Required or Critical Fix',
                'is_correct' => false,
                'question_id' => 19,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 19,
            ],
            [
                'answer_sentence' => 'Democratic decentralized (DD)',
                'is_correct' => true,
                'question_id' => 20,
            ],
            [
                'answer_sentence' => 'Controlled Centralized (CC)',
                'is_correct' => false,
                'question_id' => 20,
            ],
            [
                'answer_sentence' => 'Controlled decentralized (CD)',
                'is_correct' => false,
                'question_id' => 20,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 20,
            ],
            [
                'answer_sentence' => ' A programming language',
                'is_correct' => false,
                'question_id' => 21,
            ],
            [
                'answer_sentence' => 'A collection of algorithms',
                'is_correct' => false,
                'question_id' => 21,
            ],
            [
                'answer_sentence' => 'A way to store and organize data',
                'is_correct' => True,
                'question_id' => 21,
            ],
            [
                'answer_sentence' => 'A type of computer hardware',
                'is_correct' => false,
                'question_id' => 21,
            ],
            [
                'answer_sentence' => 'Index value of an array can be negative',
                'is_correct' => false,
                'question_id' => 22,
            ],
            [
                'answer_sentence' => 'Elements are sequentially accessed',
                'is_correct' => false,
                'question_id' => 22,
            ],
            [
                'answer_sentence' => 'Data structure like queue or stack cannot be implemented',
                'is_correct' => false,
                'question_id' => 22,
            ],
            [
                'answer_sentence' => 'There are chances of wastage of memory space if elements inserted in an array are lesser than the allocated size',
                'is_correct' => True,
                'question_id' => 22,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => True,
                'question_id' => 23,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => false,
                'question_id' => 23,
            ],
            [
                'answer_sentence' => 'List',
                'is_correct' => false,
                'question_id' => 23,
            ],
            [
                'answer_sentence' => 'Array',
                'is_correct' => false,
                'question_id' => 23,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => false,
                'question_id' => 24,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => True,
                'question_id' => 24,
            ],
            [
                'answer_sentence' => 'Tree',
                'is_correct' => false,
                'question_id' => 24,
            ],
            [
                'answer_sentence' => 'Array',
                'is_correct' => false,
                'question_id' => 24,
            ],
            [
                'answer_sentence' => 'Data Transfer between two asynchronous process',
                'is_correct' => True,
                'question_id' => 25,
            ],
            [
                'answer_sentence' => 'Compiler Syntax Analyzer',
                'is_correct' => false,
                'question_id' => 25,
            ],
            [
                'answer_sentence' => 'Tracking of local variables at run time',
                'is_correct' => false,
                'question_id' => 25,
            ],
            [
                'answer_sentence' => 'A parentheses balancing program',
                'is_correct' => false,
                'question_id' => 25,
            ],
            [
                'answer_sentence' => 'Tree',
                'is_correct' => false,
                'question_id' => 26,
            ],
            [
                'answer_sentence' => 'Branch',
                'is_correct' => false,
                'question_id' => 26,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => True,
                'question_id' => 26,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => false,
                'question_id' => 26,
            ],
            [
                'answer_sentence' => '74',
                'is_correct' => false,
                'question_id' => 27,
            ],
            [
                'answer_sentence' => '-18',
                'is_correct' => True,
                'question_id' => 27,
            ],
            [
                'answer_sentence' => '22',
                'is_correct' => false,
                'question_id' => 27,
            ],
            [
                'answer_sentence' => '40',
                'is_correct' => false,
                'question_id' => 27,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => True,
                'question_id' => 28,
            ],
            [
                'answer_sentence' => 'Linked List',
                'is_correct' => false,
                'question_id' => 28,
            ],
            [
                'answer_sentence' => 'Tree',
                'is_correct' => false,
                'question_id' => 28,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => false,
                'question_id' => 28,
            ],
            [
                'answer_sentence' => 'Top of the Stack always contain the new node',
                'is_correct' => false,
                'question_id' => 29,
            ],
            [
                'answer_sentence' => 'Stack is the FIFO data structure',
                'is_correct' => True,
                'question_id' => 29,
            ],
            [
                'answer_sentence' => 'Null link is present in the last node at the bottom of the stack',
                'is_correct' => false,
                'question_id' => 29,
            ],
            [
                'answer_sentence' => 'Linked List are used for implementing Stacks',
                'is_correct' => false,
                'question_id' => 29,
            ],
            [
                'answer_sentence' => 'Array',
                'is_correct' => false,
                'question_id' => 30,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => false,
                'question_id' => 30,
            ],
            [
                'answer_sentence' => 'Tree',
                'is_correct' => false,
                'question_id' => 30,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => True,
                'question_id' => 30,
            ],
            [
                'answer_sentence' => '-A/B*C^DE',
                'is_correct' => True,
                'question_id' => 31,
            ],
            [
                'answer_sentence' => '-A/BC*^DE',
                'is_correct' => false,
                'question_id' => 31,
            ],
            [
                'answer_sentence' => '-ABCD*^DE',
                'is_correct' => false,
                'question_id' => 31,
            ],
            [
                'answer_sentence' => '-/*^ACBDE',
                'is_correct' => false,
                'question_id' => 31,
            ],
            [
                'answer_sentence' => 'Random access is not allowed in a typical implementation of Linked Lists',
                'is_correct' => false,
                'question_id' => 32,
            ],
            [
                'answer_sentence' => 'Access of elements in linked list takes less time than compared to arrays',
                'is_correct' => True,
                'question_id' => 32,
            ],
            [
                'answer_sentence' => 'Arrays have better cache locality that can make them better in terms of performance',
                'is_correct' => false,
                'question_id' => 32,
            ],
            [
                'answer_sentence' => 'It is easy to insert and delete elements in Linked List',
                'is_correct' => false,
                'question_id' => 32,
            ],
            [
                'answer_sentence' => 'Tree',
                'is_correct' => false,
                'question_id' => 33,
            ],
            [
                'answer_sentence' => 'Linked List',
                'is_correct' => false,
                'question_id' => 33,
            ],
            [
                'answer_sentence' => 'Stack',
                'is_correct' => True,
                'question_id' => 33,
            ],
            [
                'answer_sentence' => 'Queue',
                'is_correct' => false,
                'question_id' => 33,
            ],
            [
                'answer_sentence' => 'Recursive function calls',
                'is_correct' => false,
                'question_id' => 34,
            ],
            [
                'answer_sentence' => 'Undo operation in a text editor',
                'is_correct' => false,
                'question_id' => 34,
            ],
            [
                'answer_sentence' => 'Implement Hash Tables',
                'is_correct' => false,
                'question_id' => 34,
            ],
            [
                'answer_sentence' => 'Allocating CPU to resources',
                'is_correct' => True,
                'question_id' => 34,
            ],
            [
                'answer_sentence' => 'Data structure that compactly stores bits',
                'is_correct' => True,
                'question_id' => 35,
            ],
            [
                'answer_sentence' => 'Data structure for representing arrays of records',
                'is_correct' => false,
                'question_id' => 35,
            ],
            [
                'answer_sentence' => 'Array in which elements are not present in continuous locations',
                'is_correct' => false,
                'question_id' => 35,
            ],
            [
                'answer_sentence' => 'An array in which most of the elements have the same value',
                'is_correct' => false,
                'question_id' => 35,
            ],
            [
                'answer_sentence' => 'Splay tree',
                'is_correct' => false,
                'question_id' => 36,
            ],
            [
                'answer_sentence' => 'B-tree',
                'is_correct' => True,
                'question_id' => 36,
            ],
            [
                'answer_sentence' => 'AVL tree',
                'is_correct' => false,
                'question_id' => 36,
            ],
            [
                'answer_sentence' => 'ed-black tree',
                'is_correct' => false,
                'question_id' => 36,
            ],
            [
                'answer_sentence' => 'Priority queue',
                'is_correct' => false,
                'question_id' => 37,
            ],
            [
                'answer_sentence' => 'Circular queue',
                'is_correct' => false,
                'question_id' => 37,
            ],
            [
                'answer_sentence' => 'Single ended queue',
                'is_correct' => True,
                'question_id' => 37,
            ],
            [
                'answer_sentence' => 'Ordinary queue',
                'is_correct' => false,
                'question_id' => 37,
            ],
            [
                'answer_sentence' => 'n-ary tree',
                'is_correct' => false,
                'question_id' => 38,
            ],
            [
                'answer_sentence' => 'queue',
                'is_correct' => false,
                'question_id' => 38,
            ],
            [
                'answer_sentence' => 'priority queue',
                'is_correct' => false,
                'question_id' => 38,
            ],
            [
                'answer_sentence' => 'stack',
                'is_correct' => True,
                'question_id' => 38,
            ],
            [
                'answer_sentence' => 'Backtracking',
                'is_correct' => false,
                'question_id' => 39,
            ],
            [
                'answer_sentence' => 'Divide and Conquer',
                'is_correct' => True,
                'question_id' => 39,
            ],
            [
                'answer_sentence' => 'Branch',
                'is_correct' => false,
                'question_id' => 39,
            ],
            [
                'answer_sentence' => 'Greedy',
                'is_correct' => false,
                'question_id' => 39,
            ],
            [
                'answer_sentence' => 'easier computations',
                'is_correct' => false,
                'question_id' => 40,
            ],
            [
                'answer_sentence' => 'implement LIFO principle in queues',
                'is_correct' => false,
                'question_id' => 40,
            ],
            [
                'answer_sentence' => 'effective usage of memory',
                'is_correct' => True,
                'question_id' => 40,
            ],
            [
                'answer_sentence' => 'to delete elements based on priority',
                'is_correct' => false,
                'question_id' => 40,
            ],
            [
                'answer_sentence' => 'Data of Binary Management System',
                'is_correct' => false,
                'question_id' => 41,
            ],
            [
                'answer_sentence' => 'Database Management System',
                'is_correct' => True,
                'question_id' => 41,
            ],
            [
                'answer_sentence' => 'Database Management Service',
                'is_correct' => false,
                'question_id' => 41,
            ],
            [
                'answer_sentence' => 'Data Backup Management System',
                'is_correct' => false,
                'question_id' => 41,
            ],
            [
                'answer_sentence' => 'Organized collection of information that cannot be accessed, updated, and managed',
                'is_correct' => false,
                'question_id' => 42,
            ],
            [
                'answer_sentence' => 'Collection of data or information without organizing',
                'is_correct' => false,
                'question_id' => 42,
            ],
            [
                'answer_sentence' => 'Organized collection of data or information that can be accessed, updated, and managed',
                'is_correct' => True,
                'question_id' => 42,
            ],
            [
                'answer_sentence' => 'Organized collection of data that cannot be updated',
                'is_correct' => false,
                'question_id' => 42,
            ],
            [
                'answer_sentence' => 'DBMS is a collection of queries',
                'is_correct' => false,
                'question_id' => 43,
            ],
            [
                'answer_sentence' => 'DBMS is a high-level language',
                'is_correct' => false,
                'question_id' => 43,
            ],
            [
                'answer_sentence' => 'DBMS is a programming language',
                'is_correct' => false,
                'question_id' => 43,
            ],
            [
                'answer_sentence' => 'DBMS stores, modifies and retrieves data',
                'is_correct' => True,
                'question_id' => 43,
            ],
            [
                'answer_sentence' => 'Edgar Frank Codd',
                'is_correct' => false,
                'question_id' => 44,
            ],
            [
                'answer_sentence' => 'Charles Bachman',
                'is_correct' => True,
                'question_id' => 44,
            ],
            [
                'answer_sentence' => 'Charles Babbage',
                'is_correct' => false,
                'question_id' => 44,
            ],
            [
                'answer_sentence' => 'Sharon B. Codd',
                'is_correct' => false,
                'question_id' => 44,
            ],
            [
                'answer_sentence' => 'Image oriented data',
                'is_correct' => false,
                'question_id' => 45,
            ],
            [
                'answer_sentence' => 'Text, files containing data',
                'is_correct' => false,
                'question_id' => 45,
            ],
            [
                'answer_sentence' => 'Data in the form of audio or video',
                'is_correct' => false,
                'question_id' => 45,
            ],
            [
                'answer_sentence' => 'All of the above',
                'is_correct' => True,
                'question_id' => 45,
            ],
            [
                'answer_sentence' => 'Image',
                'is_correct' => false,
                'question_id' => 46,
            ],
            [
                'answer_sentence' => 'Text',
                'is_correct' => false,
                'question_id' => 46,
            ],
            [
                'answer_sentence' => 'Table',
                'is_correct' => True,
                'question_id' => 46,
            ],
            [
                'answer_sentence' => 'Graph',
                'is_correct' => false,
                'question_id' => 46,
            ],
            [
                'answer_sentence' => 'Hierarchical',
                'is_correct' => false,
                'question_id' => 47,
            ],
            [
                'answer_sentence' => 'Network',
                'is_correct' => false,
                'question_id' => 47,
            ],
            [
                'answer_sentence' => 'Distributed',
                'is_correct' => false,
                'question_id' => 47,
            ],
            [
                'answer_sentence' => 'Decentralized',
                'is_correct' => True,
                'question_id' => 47,
            ],
            [
                'answer_sentence' => 'MySQL',
                'is_correct' => false,
                'question_id' => 48,
            ],
            [
                'answer_sentence' => 'Microsoft Acess',
                'is_correct' => false,
                'question_id' => 48,
            ],
            [
                'answer_sentence' => 'IBM DB2',
                'is_correct' => false,
                'question_id' => 48,
            ],
            [
                'answer_sentence' => 'Google',
                'is_correct' => True,
                'question_id' => 48,
            ],
            [
                'answer_sentence' => 'Minimum Duplication and Redundancy of Data',
                'is_correct' => false,
                'question_id' => 49,
            ],
            [
                'answer_sentence' => 'High Level of Security',
                'is_correct' => false,
                'question_id' => 49,
            ],
            [
                'answer_sentence' => 'Single-user Access only',
                'is_correct' => True,
                'question_id' => 49,
            ],
            [
                'answer_sentence' => 'Support ACID Property',
                'is_correct' => false,
                'question_id' => 49,
            ],
            [
                'answer_sentence' => 'No-backup for the data stored',
                'is_correct' => false,
                'question_id' => 50,
            ],
            [
                'answer_sentence' => 'User interface provided',
                'is_correct' => True,
                'question_id' => 50,
            ],
            [
                'answer_sentence' => 'Lack of Authentication',
                'is_correct' => false,
                'question_id' => 50,
            ],
            [
                'answer_sentence' => 'Store data in multiple locations',
                'is_correct' => false,
                'question_id' => 50,
            ],
            [
                'answer_sentence' => 'Managing stored data',
                'is_correct' => false,
                'question_id' => 51,
            ],
            [
                'answer_sentence' => 'Manipulating data',
                'is_correct' => false,
                'question_id' => 51,
            ],
            [
                'answer_sentence' => 'Security for stored data',
                'is_correct' => false,
                'question_id' => 51,
            ],
            [
                'answer_sentence' => 'Analysing code',
                'is_correct' => True,
                'question_id' => 51,
            ],
            [
                'answer_sentence' => 'Storing data',
                'is_correct' => false,
                'question_id' => 52,
            ],
            [
                'answer_sentence' => 'Providing multi-users access control',
                'is_correct' => false,
                'question_id' => 52,
            ],
            [
                'answer_sentence' => 'Data Integrity',
                'is_correct' => false,
                'question_id' => 52,
            ],
            [
                'answer_sentence' => 'All of the above',
                'is_correct' => True,
                'question_id' => 52,
            ],
            [
                'answer_sentence' => 'Data',
                'is_correct' => false,
                'question_id' => 53,
            ],
            [
                'answer_sentence' => 'Data Languages',
                'is_correct' => false,
                'question_id' => 53,
            ],
            [
                'answer_sentence' => 'Data Manager',
                'is_correct' => false,
                'question_id' => 53,
            ],
            [
                'answer_sentence' => 'All of the above',
                'is_correct' => True,
                'question_id' => 53,
            ],
            [
                'answer_sentence' => 'Relation set',
                'is_correct' => false,
                'question_id' => 54,
            ],
            [
                'answer_sentence' => 'Tuples',
                'is_correct' => false,
                'question_id' => 54,
            ],
            [
                'answer_sentence' => 'Entity set',
                'is_correct' => True,
                'question_id' => 54,
            ],
            [
                'answer_sentence' => 'Entity Relation model',
                'is_correct' => false,
                'question_id' => 54,
            ],
            [
                'answer_sentence' => 'Hyper data',
                'is_correct' => false,
                'question_id' => 55,
            ],
            [
                'answer_sentence' => 'Tera data',
                'is_correct' => false,
                'question_id' => 55,
            ],
            [
                'answer_sentence' => 'Meta data',
                'is_correct' => True,
                'question_id' => 55,
            ],
            [
                'answer_sentence' => 'Relations',
                'is_correct' => false,
                'question_id' => 55,
            ],
            [
                'answer_sentence' => 'Collection of Records',
                'is_correct' => false,
                'question_id' => 56,
            ],
            [
                'answer_sentence' => 'Collection of Keys',
                'is_correct' => false,
                'question_id' => 56,
            ],
            [
                'answer_sentence' => 'Collection of Tables',
                'is_correct' => True,
                'question_id' => 56,
            ],
            [
                'answer_sentence' => 'Collection of Fields',
                'is_correct' => false,
                'question_id' => 56,
            ],
            [
                'answer_sentence' => 'Referential',
                'is_correct' => True,
                'question_id' => 57,
            ],
            [
                'answer_sentence' => 'Primary',
                'is_correct' => false,
                'question_id' => 57,
            ],
            [
                'answer_sentence' => 'Referencing',
                'is_correct' => false,
                'question_id' => 57,
            ],
            [
                'answer_sentence' => 'Specific',
                'is_correct' => false,
                'question_id' => 57,
            ],
            [
                'answer_sentence' => 'Microphone',
                'is_correct' => false,
                'question_id' => 58,
            ],
            [
                'answer_sentence' => 'High speed, large capacity disk to store data',
                'is_correct' => True,
                'question_id' => 58,
            ],
            [
                'answer_sentence' => 'High-resolution video display',
                'is_correct' => false,
                'question_id' => 58,
            ],
            [
                'answer_sentence' => 'Printer',
                'is_correct' => false,
                'question_id' => 58,
            ],
            [
                'answer_sentence' => 'Data and the DBMS',
                'is_correct' => false,
                'question_id' => 59,
            ],
            [
                'answer_sentence' => 'Application and SQL',
                'is_correct' => false,
                'question_id' => 59,
            ],
            [
                'answer_sentence' => 'Database application and the database',
                'is_correct' => True,
                'question_id' => 59,
            ],
            [
                'answer_sentence' => 'The user and the software',
                'is_correct' => false,
                'question_id' => 59,
            ],
            [
                'answer_sentence' => 'TCL (Transaction Control Language)',
                'is_correct' => false,
                'question_id' => 60,
            ],
            [
                'answer_sentence' => 'DCL (Data Control Language)',
                'is_correct' => false,
                'question_id' => 60,
            ],
            [
                'answer_sentence' => 'DDL (Data Definition Langauge)',
                'is_correct' => false,
                'question_id' => 60,
            ],
            [
                'answer_sentence' => 'DML (Data Manipulation Langauge)',
                'is_correct' => True,
                'question_id' => 60,
            ],
            [
                'answer_sentence' => 'interface between the hardware and application programs',
                'is_correct' => false,
                'question_id' => 61,
            ],
            [
                'answer_sentence' => 'collection of programs that manages hardware resources',
                'is_correct' => false,
                'question_id' => 61,
            ],
            [
                'answer_sentence' => 'system service provider to the application programs',
                'is_correct' => false,
                'question_id' => 61,
            ],
            [
                'answer_sentence' => 'all of the mentioned',
                'is_correct' => True,
                'question_id' => 61,
            ],
            [
                'answer_sentence' => 'to provide the interface between the API and application program',
                'is_correct' => false,
                'question_id' => 62,
            ],
            [
                'answer_sentence' => 'to handle the files in the operating system',
                'is_correct' => false,
                'question_id' => 62,
            ],
            [
                'answer_sentence' => 'to get and execute the next user-specified command',
                'is_correct' => True,
                'question_id' => 62,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 62,
            ],
            [
                'answer_sentence' => 'Priority',
                'is_correct' => false,
                'question_id' => 63,
            ],
            [
                'answer_sentence' => 'Round Robin',
                'is_correct' => false,
                'question_id' => 63,
            ],
            [
                'answer_sentence' => 'Shortest Job First',
                'is_correct' => false,
                'question_id' => 63,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => True,
                'question_id' => 63,
            ],
            [
                'answer_sentence' => 'Library',
                'is_correct' => false,
                'question_id' => 64,
            ],
            [
                'answer_sentence' => 'System calls',
                'is_correct' => True,
                'question_id' => 64,
            ],
            [
                'answer_sentence' => 'Assembly instructions',
                'is_correct' => false,
                'question_id' => 64,
            ],
            [
                'answer_sentence' => 'API',
                'is_correct' => false,
                'question_id' => 64,
            ],
            [
                'answer_sentence' => 'multiprogramming operating systems',
                'is_correct' => True,
                'question_id' => 65,
            ],
            [
                'answer_sentence' => 'larger memory sized systems',
                'is_correct' => false,
                'question_id' => 65,
            ],
            [
                'answer_sentence' => 'multiprocessor systems',
                'is_correct' => false,
                'question_id' => 65,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 65,
            ],
            [
                'answer_sentence' => 'kernel remains in the memory during the entire computer session',
                'is_correct' => false,
                'question_id' => 66,
            ],
            [
                'answer_sentence' => 'kernel is made of various modules which can not be loaded in running operating system',
                'is_correct' => True,
                'question_id' => 66,
            ],
            [
                'answer_sentence' => 'kernel is the first part of the operating system to load into memory during booting',
                'is_correct' => false,
                'question_id' => 66,
            ],
            [
                'answer_sentence' => 'kernel is the program that constitutes the central core of the operating system',
                'is_correct' => false,
                'question_id' => 66,
            ],
            [
                'answer_sentence' => 'lack of paper in printer',
                'is_correct' => false,
                'question_id' => 67,
            ],
            [
                'answer_sentence' => 'connection failure in the network',
                'is_correct' => false,
                'question_id' => 67,
            ],
            [
                'answer_sentence' => 'power failure',
                'is_correct' => false,
                'question_id' => 67,
            ],
            [
                'answer_sentence' => 'all of the mentioned',
                'is_correct' => True,
                'question_id' => 67,
            ],
            [
                'answer_sentence' => 'either low or high memory (depending on the location of interrupt vector)',
                'is_correct' => True,
                'question_id' => 68,
            ],
            [
                'answer_sentence' => 'in the low memory',
                'is_correct' => false,
                'question_id' => 68,
            ],
            [
                'answer_sentence' => 'in the high memory',
                'is_correct' => false,
                'question_id' => 68,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 68,
            ],
            [
                'answer_sentence' => 'new file',
                'is_correct' => false,
                'question_id' => 69,
            ],
            [
                'answer_sentence' => 'another running process',
                'is_correct' => false,
                'question_id' => 69,
            ],
            [
                'answer_sentence' => 'log file',
                'is_correct' => True,
                'question_id' => 69,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 69,
            ],
            [
                'answer_sentence' => 'RTLinux',
                'is_correct' => false,
                'question_id' => 70,
            ],
            [
                'answer_sentence' => 'Palm OS',
                'is_correct' => True,
                'question_id' => 70,
            ],
            [
                'answer_sentence' => 'QNX',
                'is_correct' => false,
                'question_id' => 70,
            ],
            [
                'answer_sentence' => 'VxWorks',
                'is_correct' => false,
                'question_id' => 70,
            ],
            [
                'answer_sentence' => 'monolithic kernel with modules',
                'is_correct' => false,
                'question_id' => 71,
            ],
            [
                'answer_sentence' => 'microkernel',
                'is_correct' => false,
                'question_id' => 71,
            ],
            [
                'answer_sentence' => 'monolithic kernel',
                'is_correct' => false,
                'question_id' => 71,
            ],
            [
                'answer_sentence' => 'hybrid kernel',
                'is_correct' => True,
                'question_id' => 71,
            ],
            [
                'answer_sentence' => 'open files',
                'is_correct' => false,
                'question_id' => 72,
            ],
            [
                'answer_sentence' => 'pending alarms, signals, and signal handlers',
                'is_correct' => false,
                'question_id' => 72,
            ],
            [
                'answer_sentence' => 'address space and global variables',
                'is_correct' => false,
                'question_id' => 72,
            ],
            [
                'answer_sentence' => 'all of the mentioned',
                'is_correct' => True,
                'question_id' => 72,
            ],
            [
                'answer_sentence' => 'Suspended state',
                'is_correct' => false,
                'question_id' => 73,
            ],
            [
                'answer_sentence' => 'Terminated state',
                'is_correct' => false,
                'question_id' => 73,
            ],
            [
                'answer_sentence' => 'Ready state',
                'is_correct' => True,
                'question_id' => 73,
            ],
            [
                'answer_sentence' => 'Blocked state',
                'is_correct' => false,
                'question_id' => 73,
            ],
            [
                'answer_sentence' => 'Normally or abnormally',
                'is_correct' => True,
                'question_id' => 74,
            ],
            [
                'answer_sentence' => 'Abnormally',
                'is_correct' => false,
                'question_id' => 74,
            ],
            [
                'answer_sentence' => 'Normally',
                'is_correct' => false,
                'question_id' => 74,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 74,
            ],
            [
                'answer_sentence' => 'Terminated state',
                'is_correct' => false,
                'question_id' => 75,
            ],
            [
                'answer_sentence' => 'Suspended state',
                'is_correct' => false,
                'question_id' => 75,
            ],
            [
                'answer_sentence' => 'Running state',
                'is_correct' => false,
                'question_id' => 75,
            ],
            [
                'answer_sentence' => 'Ready state',
                'is_correct' => True,
                'question_id' => 75,
            ],
            [
                'answer_sentence' => 'stays in the memory always',
                'is_correct' => false,
                'question_id' => 76,
            ],
            [
                'answer_sentence' => 'never enters the memory space',
                'is_correct' => false,
                'question_id' => 76,
            ],
            [
                'answer_sentence' => 'comes and goes as needed',
                'is_correct' => True,
                'question_id' => 76,
            ],
            [
                'answer_sentence' => 'is not easily accessible',
                'is_correct' => false,
                'question_id' => 76,
            ],
            [
                'answer_sentence' => 'assigning ready processes to waiting queue',
                'is_correct' => false,
                'question_id' => 77,
            ],
            [
                'answer_sentence' => 'assigning running processes to blocked queue',
                'is_correct' => false,
                'question_id' => 77,
            ],
            [
                'answer_sentence' => 'assigning ready processes to CPU',
                'is_correct' => True,
                'question_id' => 77,
            ],
            [
                'answer_sentence' => 'all of the mentioned',
                'is_correct' => false,
                'question_id' => 77,
            ],
            [
                'answer_sentence' => 'operating systems',
                'is_correct' => false,
                'question_id' => 78,
            ],
            [
                'answer_sentence' => 'multiprocessor systems',
                'is_correct' => false,
                'question_id' => 78,
            ],
            [
                'answer_sentence' => 'time sharing systems',
                'is_correct' => True,
                'question_id' => 78,
            ],
            [
                'answer_sentence' => 'multiprogramming systems',
                'is_correct' => false,
                'question_id' => 78,
            ],
            [
                'answer_sentence' => 'every time a resource request is made at fixed time intervals',
                'is_correct' => True,
                'question_id' => 79,
            ],
            [
                'answer_sentence' => 'at fixed time intervals',
                'is_correct' => false,
                'question_id' => 79,
            ],
            [
                'answer_sentence' => 'every time a resource request is made',
                'is_correct' => false,
                'question_id' => 79,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 79,
            ],
            [
                'answer_sentence' => 'operating system',
                'is_correct' => false,
                'question_id' => 80,
            ],
            [
                'answer_sentence' => 'resources',
                'is_correct' => false,
                'question_id' => 80,
            ],
            [
                'answer_sentence' => 'system storage state',
                'is_correct' => false,
                'question_id' => 80,
            ],
            [
                'answer_sentence' => 'resource allocation state',
                'is_correct' => True,
                'question_id' => 80,
            ],
            [
                'answer_sentence' => 'Andrea Ferro',
                'is_correct' => false,
                'question_id' => 81,
            ],
            [
                'answer_sentence' => 'Adele Goldberg',
                'is_correct' => false,
                'question_id' => 81,
            ],
            [
                'answer_sentence' => 'Alan Kay',
                'is_correct' => True,
                'question_id' => 81,
            ],
            [
                'answer_sentence' => 'Dennis Ritchie',
                'is_correct' => false,
                'question_id' => 81,
            ],
            [
                'answer_sentence' => 'Efficient Code',
                'is_correct' => false,
                'question_id' => 82,
            ],
            [
                'answer_sentence' => 'Code reusability',
                'is_correct' => false,
                'question_id' => 82,
            ],
            [
                'answer_sentence' => 'Modularity',
                'is_correct' => false,
                'question_id' => 82,
            ],
            [
                'answer_sentence' => 'Duplicate/Redundant data',
                'is_correct' => True,
                'question_id' => 82,
            ],
            [
                'answer_sentence' => 'Kotlin',
                'is_correct' => false,
                'question_id' => 83,
            ],
            [
                'answer_sentence' => 'SmallTalk',
                'is_correct' => True,
                'question_id' => 83,
            ],
            [
                'answer_sentence' => 'Java',
                'is_correct' => false,
                'question_id' => 83,
            ],
            [
                'answer_sentence' => 'C++',
                'is_correct' => false,
                'question_id' => 83,
            ],
            [
                'answer_sentence' => '1980’s',
                'is_correct' => false,
                'question_id' => 84,
            ],
            [
                'answer_sentence' => '1995',
                'is_correct' => false,
                'question_id' => 84,
            ],
            [
                'answer_sentence' => '1970’s',
                'is_correct' => True,
                'question_id' => 84,
            ],
            [
                'answer_sentence' => '1993',
                'is_correct' => false,
                'question_id' => 84,
            ],
            [
                'answer_sentence' => 'Abstraction',
                'is_correct' => false,
                'question_id' => 85,
            ],
            [
                'answer_sentence' => 'Polymorphism',
                'is_correct' => false,
                'question_id' => 85,
            ],
            [
                'answer_sentence' => 'Encapsulation',
                'is_correct' => false,
                'question_id' => 85,
            ],
            [
                'answer_sentence' => 'Inheritance',
                'is_correct' => True,
                'question_id' => 85,
            ],
            [
                'answer_sentence' => 'OOP can be used without using any header file',
                'is_correct' => True,
                'question_id' => 86,
            ],
            [
                'answer_sentence' => 'stdlib.h',
                'is_correct' => false,
                'question_id' => 86,
            ],
            [
                'answer_sentence' => 'iostream.h',
                'is_correct' => false,
                'question_id' => 86,
            ],
            [
                'answer_sentence' => 'stdio.h',
                'is_correct' => false,
                'question_id' => 86,
            ],
            [
                'answer_sentence' => 'It allows code to be written outside classes',
                'is_correct' => false,
                'question_id' => 87,
            ],
            [
                'answer_sentence' => 'It supports usual declaration of primitive data types',
                'is_correct' => True,
                'question_id' => 87,
            ],
            [
                'answer_sentence' => 'It does not support pointers',
                'is_correct' => false,
                'question_id' => 87,
            ],
            [
                'answer_sentence' => 'It doesn’t support all types of inheritance',
                'is_correct' => false,
                'question_id' => 87,
            ],
            [
                'answer_sentence' => 'Data hiding',
                'is_correct' => false,
                'question_id' => 88,
            ],
            [
                'answer_sentence' => 'Message passing',
                'is_correct' => false,
                'question_id' => 88,
            ],
            [
                'answer_sentence' => 'Platform independent',
                'is_correct' => True,
                'question_id' => 88,
            ],
            [
                'answer_sentence' => 'Data binding',
                'is_correct' => false,
                'question_id' => 88,
            ],
            [
                'answer_sentence' => 'class base_classname :access derived_classname{ /define class body/ };',
                'is_correct' => false,
                'question_id' => 89,
            ],
            [
                'answer_sentence' => 'class derived_classname : access base_classname{ /define class body/ };',
                'is_correct' => True,
                'question_id' => 89,
            ],
            [
                'answer_sentence' => 'class derived_classname : base_classname{ /define class body/ };',
                'is_correct' => false,
                'question_id' => 89,
            ],
            [
                'answer_sentence' => 'class base_classname : derived_classname{ /define class body/ };',
                'is_correct' => false,
                'question_id' => 89,
            ],
            [
                'answer_sentence' => 'Encapsulation and Inheritance',
                'is_correct' => True,
                'question_id' => 90,
            ],
            [
                'answer_sentence' => 'Inheritance and polymorphism',
                'is_correct' => false,
                'question_id' => 90,
            ],
            [
                'answer_sentence' => 'Polymorphism',
                'is_correct' => false,
                'question_id' => 90,
            ],
            [
                'answer_sentence' => 'Inheritance',
                'is_correct' => false,
                'question_id' => 90,
            ],
            [
                'answer_sentence' => 'Message reading',
                'is_correct' => false,
                'question_id' => 91,
            ],
            [
                'answer_sentence' => 'Message Passing',
                'is_correct' => True,
                'question_id' => 91,
            ],
            [
                'answer_sentence' => 'Data transfer',
                'is_correct' => false,
                'question_id' => 91,
            ],
            [
                'answer_sentence' => 'Data Binding',
                'is_correct' => false,
                'question_id' => 91,
            ],
            [
                'answer_sentence' => 'The language should follow at least 1 feature of OOP',
                'is_correct' => false,
                'question_id' => 92,
            ],
            [
                'answer_sentence' => 'The language must follow only 3 features of OOP',
                'is_correct' => false,
                'question_id' => 92,
            ],
            [
                'answer_sentence' => 'The language must follow all the rules of OOP',
                'is_correct' => True,
                'question_id' => 92,
            ],
            [
                'answer_sentence' => 'The language should follow 3 or more features of OOP',
                'is_correct' => false,
                'question_id' => 92,
            ],
            [
                'answer_sentence' => '4',
                'is_correct' => false,
                'question_id' => 93,
            ],
            [
                'answer_sentence' => '3',
                'is_correct' => True,
                'question_id' => 93,
            ],
            [
                'answer_sentence' => '2',
                'is_correct' => false,
                'question_id' => 93,
            ],
            [
                'answer_sentence' => '1',
                'is_correct' => false,
                'question_id' => 93,
            ],
            [
                'answer_sentence' => 'Code efficiency',
                'is_correct' => false,
                'question_id' => 94,
            ],
            [
                'answer_sentence' => 'Code readability',
                'is_correct' => false,
                'question_id' => 94,
            ],
            [
                'answer_sentence' => 'Flexibility',
                'is_correct' => false,
                'question_id' => 94,
            ],
            [
                'answer_sentence' => 'Code reusability',
                'is_correct' => True,
                'question_id' => 94,
            ],
            [
                'answer_sentence' => 'It is a way of combining various data members and member functions that operate on those data members into a single unit',
                'is_correct' => True,
                'question_id' => 95,
            ],
            [
                'answer_sentence' => 'It is a way of combining various data members and member functions into a single unit which can operate on any data',
                'is_correct' => false,
                'question_id' => 95,
            ],
            [
                'answer_sentence' => 'It is a way of combining various data members into a single unit',
                'is_correct' => false,
                'question_id' => 95,
            ],
            [
                'answer_sentence' => ' It is a way of combining various member functions into a single unit',
                'is_correct' => false,
                'question_id' => 95,
            ],
            [
                'answer_sentence' => 'Helps in redefining the same functionality',
                'is_correct' => false,
                'question_id' => 96,
            ],
            [
                'answer_sentence' => 'Increases overhead of function definition always',
                'is_correct' => True,
                'question_id' => 96,
            ],
            [
                'answer_sentence' => 'It is feature of OOP',
                'is_correct' => false,
                'question_id' => 96,
            ],
            [
                'answer_sentence' => 'Ease in readability of program',
                'is_correct' => false,
                'question_id' => 96,
            ],
            [
                'answer_sentence' => 'Parameterized constructor',
                'is_correct' => false,
                'question_id' => 97,
            ],
            [
                'answer_sentence' => 'Default constructor',
                'is_correct' => false,
                'question_id' => 97,
            ],
            [
                'answer_sentence' => 'Run time error',
                'is_correct' => false,
                'question_id' => 97,
            ],
            [
                'answer_sentence' => 'Compile time error',
                'is_correct' => True,
                'question_id' => 97,
            ],
            [
                'answer_sentence' => 'Hiding the implementation and showing only the features',
                'is_correct' => True,
                'question_id' => 98,
            ],
            [
                'answer_sentence' => 'Hiding the important data',
                'is_correct' => false,
                'question_id' => 98,
            ],
            [
                'answer_sentence' => 'Hiding the implementation',
                'is_correct' => false,
                'question_id' => 98,
            ],
            [
                'answer_sentence' => 'Showing the important data',
                'is_correct' => false,
                'question_id' => 98,
            ],
            [
                'answer_sentence' => 'Overloading &&',
                'is_correct' => false,
                'question_id' => 99,
            ],
            [
                'answer_sentence' => 'Overloading <<',
                'is_correct' => True,
                'question_id' => 99,
            ],
            [
                'answer_sentence' => 'Overloading ||',
                'is_correct' => false,
                'question_id' => 99,
            ],
            [
                'answer_sentence' => 'Overloading +=',
                'is_correct' => false,
                'question_id' => 99,
            ],
            [
                'answer_sentence' => 'Any access specifier will work',
                'is_correct' => false,
                'question_id' => 100,
            ],
            [
                'answer_sentence' => 'Private',
                'is_correct' => false,
                'question_id' => 100,
            ],
            [
                'answer_sentence' => 'Public',
                'is_correct' => false,
                'question_id' => 100,
            ],
            [
                'answer_sentence' => 'Protected',
                'is_correct' => false,
                'question_id' => 100,
            ],
            [
                'answer_sentence' => 'A collection of tools and techniques used to create and deliver content on the World Wide Web',
                'is_correct' => True,
                'question_id' => 101,
            ],
            [
                'answer_sentence' => 'A type of software that enables users to access and interact with information on the internet',
                'is_correct' => false,
                'question_id' => 101,
            ],
            [
                'answer_sentence' => 'A network of interconnected computers that share information and services',
                'is_correct' => True,
                'question_id' => 101,
            ],
            [
                'answer_sentence' => 'A system for storing and retrieving information on the internet',
                'is_correct' => false,
                'question_id' => 101,
            ],
            [
                'answer_sentence' => '<link>',
                'is_correct' => false,
                'question_id' => 102,
            ],
            [
                'answer_sentence' => '<href>',
                'is_correct' => false,
                'question_id' => 102,
            ],
            [
                'answer_sentence' => '<a>',
                'is_correct' => True,
                'question_id' => 102,
            ],
            [
                'answer_sentence' => '<hyperlink>',
                'is_correct' => false,
                'question_id' => 102,
            ],
            [
                'answer_sentence' => '<shadow>',
                'is_correct' => false,
                'question_id' => 103,
            ],
            [
                'answer_sentence' => '<menu>',
                'is_correct' => True,
                'question_id' => 103,
            ],
            [
                'answer_sentence' => '<content>',
                'is_correct' => false,
                'question_id' => 103,
            ],
            [
                'answer_sentence' => '<element>',
                'is_correct' => false,
                'question_id' => 103,
            ],
            [
                'answer_sentence' => 'HTML',
                'is_correct' => false,
                'question_id' => 104,
            ],
            [
                'answer_sentence' => 'CSS',
                'is_correct' => false,
                'question_id' => 104,
            ],
            [
                'answer_sentence' => 'JavaScript',
                'is_correct' => false,
                'question_id' => 104,
            ],
            [
                'answer_sentence' => 'PHP',
                'is_correct' => True,
                'question_id' =>104,
            ],
            [
                'answer_sentence' => 'Web server',
                'is_correct' => false,
                'question_id' => 105,
            ],
            [
                'answer_sentence' => 'Web matrix',
                'is_correct' => false,
                'question_id' => 105,
            ],
            [
                'answer_sentence' => 'Web browser',
                'is_correct' => True,
                'question_id' => 105,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 105,
            ],
            [
                'answer_sentence' => 'Django',
                'is_correct' => false,
                'question_id' => 106,
            ],
            [
                'answer_sentence' => 'Angular',
                'is_correct' => True,
                'question_id' => 106,
            ],
            [
                'answer_sentence' => 'Flask',
                'is_correct' => false,
                'question_id' => 106,
            ],
            [
                'answer_sentence' => 'Node.js',
                'is_correct' => false,
                'question_id' => 106,
            ],
            [
                'answer_sentence' => 'Forms',
                'is_correct' => True,
                'question_id' => 107,
            ],
            [
                'answer_sentence' => 'Browser based games',
                'is_correct' => false,
                'question_id' => 107,
            ],
            [
                'answer_sentence' => 'Web applications',
                'is_correct' => false,
                'question_id' => 107,
            ],
            [
                'answer_sentence' => 'Mobile applications',
                'is_correct' => false,
                'question_id' => 107,
            ],
            [
                'answer_sentence' => 'https',
                'is_correct' => false,
                'question_id' => 108,
            ],
            [
                'answer_sentence' => 'wss',
                'is_correct' => false,
                'question_id' => 108,
            ],
            [
                'answer_sentence' => 'http',
                'is_correct' => True,
                'question_id' => 108,
            ],
            [
                'answer_sentence' => 'ws',
                'is_correct' => false,
                'question_id' => 108,
            ],
            [
                'answer_sentence' => 'To create graphical buttons or links to other pages',
                'is_correct' => True,
                'question_id' => 109,
            ],
            [
                'answer_sentence' => 'To help the webpage load efficiently',
                'is_correct' => false,
                'question_id' => 109,
            ],
            [
                'answer_sentence' => 'Webpage cannot run/be displayed without at least one image',
                'is_correct' => false,
                'question_id' => 109,
            ],
            [
                'answer_sentence' => 'Because webpage doesn’t support pure text',
                'is_correct' => false,
                'question_id' => 109,
            ],
            [
                'answer_sentence' => 'Application programming interface',
                'is_correct' => false,
                'question_id' => 110,
            ],
            [
                'answer_sentence' => 'Hierarchy of objects in ASP.NET',
                'is_correct' => false,
                'question_id' => 110,
            ],
            [
                'answer_sentence' => 'Convention for representing and interacting with objects in html documents',
                'is_correct' => True,
                'question_id' => 110,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 110,
            ],
            [
                'answer_sentence' => 'Display information which are already accessed by the user',
                'is_correct' => false,
                'question_id' => 111,
            ],
            [
                'answer_sentence' => 'Containing more number of rows than columns',
                'is_correct' => false,
                'question_id' => 111,
            ],
            [
                'answer_sentence' => 'To only store data to be accessed later by the user',
                'is_correct' => false,
                'question_id' => 111,
            ],
            [
                'answer_sentence' => 'Display information in rows and columns used to display all manner of data that fits in a grid',
                'is_correct' => True,
                'question_id' => 111,
            ],
            [
                'answer_sentence' => 'Table database',
                'is_correct' => false,
                'question_id' => 112,
            ],
            [
                'answer_sentence' => 'Table data',
                'is_correct' => True,
                'question_id' => 112,
            ],
            [
                'answer_sentence' => 'Table directory',
                'is_correct' => false,
                'question_id' => 112,
            ],
            [
                'answer_sentence' => 'Table direct row',
                'is_correct' => false,
                'question_id' => 112,
            ],
            [
                'answer_sentence' => 'Caption',
                'is_correct' => True,
                'question_id' => 113,
            ],
            [
                'answer_sentence' => 'Headline',
                'is_correct' => false,
                'question_id' => 113,
            ],
            [
                'answer_sentence' => 'Title',
                'is_correct' => false,
                'question_id' => 113,
            ],
            [
                'answer_sentence' => 'Heading',
                'is_correct' => false,
                'question_id' => 113,
            ],
            [
                'answer_sentence' => 'They are matrices on web page',
                'is_correct' => false,
                'question_id' => 114,
            ],
            [
                'answer_sentence' => 'They are used to create Table data and its information',
                'is_correct' => false,
                'question_id' => 114,
            ],
            [
                'answer_sentence' => 'They allow you to enter data which can be processed to servers',
                'is_correct' => True,
                'question_id' => 114,
            ],
            [
                'answer_sentence' => 'They are the information filled by the server-side',
                'is_correct' => false,
                'question_id' => 114,
            ],
            [
                'answer_sentence' => 'They divide a webpage',
                'is_correct' => false,
                'question_id' => 115,
            ],
            [
                'answer_sentence' => 'They are the type of borders used for a webpage',
                'is_correct' => false,
                'question_id' => 115,
            ],
            [
                'answer_sentence' => 'They are the type of borders used by web browsers',
                'is_correct' => false,
                'question_id' => 115,
            ],
            [
                'answer_sentence' => 'They divide the browser into two or more pieces or panes',
                'is_correct' => True,
                'question_id' => 115,
            ],
            [
                'answer_sentence' => '<ol>',
                'is_correct' => True,
                'question_id' => 116,
            ],
            [
                'answer_sentence' => '<ul>',
                'is_correct' => false,
                'question_id' => 116,
            ],
            [
                'answer_sentence' => '<li>',
                'is_correct' => false,
                'question_id' => 116,
            ],
            [
                'answer_sentence' => '<ol> and <ul>',
                'is_correct' => false,
                'question_id' => 116,
            ],
            [
                'answer_sentence' => 'EOT',
                'is_correct' => false,
                'question_id' => 117,
            ],
            [
                'answer_sentence' => 'WOFF 2.0',
                'is_correct' => false,
                'question_id' => 117,
            ],
            [
                'answer_sentence' => 'WOFF',
                'is_correct' => True,
                'question_id' => 117,
            ],
            [
                'answer_sentence' => 'SVG Fonts',
                'is_correct' => false,
                'question_id' => 117,
            ],
            [
                'answer_sentence' => '<form>',
                'is_correct' => True,
                'question_id' => 118,
            ],
            [
                'answer_sentence' => '<input>',
                'is_correct' => false,
                'question_id' => 118,
            ],
            [
                'answer_sentence' => '<select>',
                'is_correct' => false,
                'question_id' => 118,
            ],
            [
                'answer_sentence' => '<textarea>',
                'is_correct' => false,
                'question_id' => 118,
            ],
            [
                'answer_sentence' => 'border',
                'is_correct' => false,
                'question_id' => 119,
            ],
            [
                'answer_sentence' => 'padding',
                'is_correct' => True,
                'question_id' => 119,
            ],
            [
                'answer_sentence' => 'margin',
                'is_correct' => false,
                'question_id' => 119,
            ],
            [
                'answer_sentence' => 'resize',
                'is_correct' => false,
                'question_id' => 119,
            ],
            [
                'answer_sentence' => 'fix',
                'is_correct' => false,
                'question_id' => 120,
            ],
            [
                'answer_sentence' => 'set',
                'is_correct' => false,
                'question_id' => 120,
            ],
            [
                'answer_sentence' => 'static',
                'is_correct' => false,
                'question_id' => 120,
            ],
            [
                'answer_sentence' => 'position',
                'is_correct' => True,
                'question_id' => 120,
            ],
            [
                'answer_sentence' => 'Artificially Intelligent',
                'is_correct' => false,
                'question_id' => 121,
            ],
            [
                'answer_sentence' => 'Artificial Intelligence',
                'is_correct' => True,
                'question_id' => 121,
            ],
            [
                'answer_sentence' => 'Artificially Intelligence',
                'is_correct' => false,
                'question_id' => 121,
            ],
            [
                'answer_sentence' => 'Advanced Intelligence',
                'is_correct' => false,
                'question_id' => 121,
            ],
            [
                'answer_sentence' => 'Artificial Intelligence is a field that aims to make humans more intelligent',
                'is_correct' => false,
                'question_id' => 122,
            ],
            [
                'answer_sentence' => 'Artificial Intelligence is a field that aims to improve the security',
                'is_correct' => false,
                'question_id' => 122,
            ],
            [
                'answer_sentence' => 'Artificial Intelligence is a field that aims to develop intelligent machines',
                'is_correct' => True,
                'question_id' => 122,
            ],
            [
                'answer_sentence' => 'Artificial Intelligence is a field that aims to mine the data',
                'is_correct' => false,
                'question_id' => 122,
            ],
            [
                'answer_sentence' => 'Geoffrey Hinton',
                'is_correct' => false,
                'question_id' => 123,
            ],
            [
                'answer_sentence' => 'Andrew Ng',
                'is_correct' => false,
                'question_id' => 123,
            ],
            [
                'answer_sentence' => 'John McCarthy',
                'is_correct' => True,
                'question_id' => 123,
            ],
            [
                'answer_sentence' => 'Jürgen Schmidhuber',
                'is_correct' => false,
                'question_id' => 123,
            ],
            [
                'answer_sentence' => 'Machine Learning',
                'is_correct' => True,
                'question_id' => 124,
            ],
            [
                'answer_sentence' => 'Cyber forensics',
                'is_correct' => false,
                'question_id' => 124,
            ],
            [
                'answer_sentence' => 'Full-Stack Developer',
                'is_correct' => false,
                'question_id' => 124,
            ],
            [
                'answer_sentence' => 'Network Design',
                'is_correct' => false,
                'question_id' => 124,
            ],
            [
                'answer_sentence' => 'To solve artificial problems',
                'is_correct' => false,
                'question_id' => 125,
            ],
            [
                'answer_sentence' => 'To extract scientific causes',
                'is_correct' => false,
                'question_id' => 125,
            ],
            [
                'answer_sentence' => 'To explain various sorts of intelligence',
                'is_correct' => True,
                'question_id' => 125,
            ],
            [
                'answer_sentence' => 'To solve real-world problems',
                'is_correct' => false,
                'question_id' => 125,
            ],
            [
                'answer_sentence' => 'It helps to exploit vulnerabilities to secure the firm',
                'is_correct' => false,
                'question_id' => 126,
            ],
            [
                'answer_sentence' => 'Language understanding and problem-solving (Text analytics and NLP)',
                'is_correct' => True,
                'question_id' => 126,
            ],
            [
                'answer_sentence' => 'Easy to create a website',
                'is_correct' => false,
                'question_id' => 126,
            ],
            [
                'answer_sentence' => 'It helps to deploy applications on the cloud',
                'is_correct' => false,
                'question_id' => 126,
            ],
            [
                'answer_sentence' => 'ategorized into 5 categories',
                'is_correct' => false,
                'question_id' => 127,
            ],
            [
                'answer_sentence' => 'processes are categorized based on the input provided',
                'is_correct' => false,
                'question_id' => 127,
            ],
            [
                'answer_sentence' => 'categorized into 3 categories',
                'is_correct' => True,
                'question_id' => 127,
            ],
            [
                'answer_sentence' => 'process is not categorized',
                'is_correct' => false,
                'question_id' => 127,
            ],
            [
                'answer_sentence' => 'Based on functionally only',
                'is_correct' => false,
                'question_id' => 128,
            ],
            [
                'answer_sentence' => 'Based on capabilities only',
                'is_correct' => false,
                'question_id' => 128,
            ],
            [
                'answer_sentence' => 'Based on capabilities and functionally',
                'is_correct' => True,
                'question_id' => 128,
            ],
            [
                'answer_sentence' => 'It is not categorized',
                'is_correct' => false,
                'question_id' => 128,
            ],
            [
                'answer_sentence' => 'Learning',
                'is_correct' => True,
                'question_id' => 129,
            ],
            [
                'answer_sentence' => 'Training',
                'is_correct' => false,
                'question_id' => 129,
            ],
            [
                'answer_sentence' => 'Designing',
                'is_correct' => false,
                'question_id' => 129,
            ],
            [
                'answer_sentence' => 'Puzzling',
                'is_correct' => false,
                'question_id' => 129,
            ],
            [
                'answer_sentence' => 'Mapping of goal sequence to an action',
                'is_correct' => false,
                'question_id' => 130,
            ],
            [
                'answer_sentence' => 'Work without the direct interference of the people',
                'is_correct' => false,
                'question_id' => 130,
            ],
            [
                'answer_sentence' => 'Mapping of precept sequence to an action',
                'is_correct' => True,
                'question_id' => 130,
            ],
            [
                'answer_sentence' => 'Mapping of environment sequence to an action',
                'is_correct' => false,
                'question_id' => 130,
            ],
            [
                'answer_sentence' => 'Perl',
                'is_correct' => True,
                'question_id' => 131,
            ],
            [
                'answer_sentence' => 'Java',
                'is_correct' => false,
                'question_id' => 131,
            ],
            [
                'answer_sentence' => 'PROLOG',
                'is_correct' => false,
                'question_id' => 131,
            ],
            [
                'answer_sentence' => 'LISP',
                'is_correct' => false,
                'question_id' => 131,
            ],
            [
                'answer_sentence' => 'program known as BACON',
                'is_correct' => false,
                'question_id' => 132,
            ],
            [
                'answer_sentence' => 'system known as STUDENT',
                'is_correct' => True,
                'question_id' => 132,
            ],
            [
                'answer_sentence' => 'program known as SHRDLU',
                'is_correct' => false,
                'question_id' => 132,
            ],
            [
                'answer_sentence' => 'system known as SIMD',
                'is_correct' => false,
                'question_id' => 132,
            ],
            [
                'answer_sentence' => 'program that can read algebra word problems only',
                'is_correct' => false,
                'question_id' => 133,
            ],
            [
                'answer_sentence' => 'system which can solve algebra word problems but not read',
                'is_correct' => false,
                'question_id' => 133,
            ],
            [
                'answer_sentence' => 'system which can read and solve algebra word problems',
                'is_correct' => True,
                'question_id' => 133,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => false,
                'question_id' => 133,
            ],
            [
                'answer_sentence' => 'Face recognition system',
                'is_correct' => false,
                'question_id' => 134,
            ],
            [
                'answer_sentence' => 'Chatbots',
                'is_correct' => false,
                'question_id' => 134,
            ],
            [
                'answer_sentence' => 'LIDAR',
                'is_correct' => false,
                'question_id' => 134,
            ],
            [
                'answer_sentence' => 'DBMS',
                'is_correct' => True,
                'question_id' => 134,
            ],
            [
                'answer_sentence' => 'Actuators',
                'is_correct' => false,
                'question_id' => 135,
            ],
            [
                'answer_sentence' => 'Sensor',
                'is_correct' => false,
                'question_id' => 135,
            ],
            [
                'answer_sentence' => 'Agents',
                'is_correct' => false,
                'question_id' => 135,
            ],
            [
                'answer_sentence' => 'AI system',
                'is_correct' => True,
                'question_id' => 135,
            ],
            [
                'answer_sentence' => '4',
                'is_correct' => True,
                'question_id' => 136,
            ],
            [
                'answer_sentence' => '3',
                'is_correct' => false,
                'question_id' => 136,
            ],
            [
                'answer_sentence' => '2',
                'is_correct' => false,
                'question_id' => 136,
            ],
            [
                'answer_sentence' => '1',
                'is_correct' => false,
                'question_id' => 136,
            ],
            [
                'answer_sentence' => '3 proposition symbols',
                'is_correct' => false,
                'question_id' => 137,
            ],
            [
                'answer_sentence' => '1 proposition symbols',
                'is_correct' => false,
                'question_id' => 137,
            ],
            [
                'answer_sentence' => '2 proposition symbols',
                'is_correct' => True,
                'question_id' => 137,
            ],
            [
                'answer_sentence' => 'No proposition symbols',
                'is_correct' => false,
                'question_id' => 137,
            ],
            [
                'answer_sentence' => 'There are 3 logical symbols',
                'is_correct' => false,
                'question_id' => 138,
            ],
            [
                'answer_sentence' => 'There are 5 logical symbols',
                'is_correct' => True,
                'question_id' => 138,
            ],
            [
                'answer_sentence' => 'Number of logical symbols are based on the input',
                'is_correct' => false,
                'question_id' => 138,
            ],
            [
                'answer_sentence' => 'Logical symbols are not used',
                'is_correct' => false,
                'question_id' => 138,
            ],
            [
                'answer_sentence' => 'Applied approach',
                'is_correct' => false,
                'question_id' => 139,
            ],
            [
                'answer_sentence' => 'Strong approach',
                'is_correct' => false,
                'question_id' => 139,
            ],
            [
                'answer_sentence' => 'Weak approach',
                'is_correct' => false,
                'question_id' => 139,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => True,
                'question_id' => 139,
            ],
            [
                'answer_sentence' => 'Weak AI approach',
                'is_correct' => false,
                'question_id' => 140,
            ],
            [
                'answer_sentence' => 'Applied AI approach',
                'is_correct' => True,
                'question_id' => 140,
            ],
            [
                'answer_sentence' => 'Cognitive AI approach',
                'is_correct' => false,
                'question_id' => 140,
            ],
            [
                'answer_sentence' => 'Strong AI approach',
                'is_correct' => false,
                'question_id' => 140,
            ],
            [
                'answer_sentence' => 'Wick van Rossum',
                'is_correct' => false,
                'question_id' => 141,
            ],
            [
                'answer_sentence' => 'Rasmus Lerdorf',
                'is_correct' => false,
                'question_id' => 141,
            ],
            [
                'answer_sentence' => 'Guido van Rossum',
                'is_correct' => True,
                'question_id' => 141,
            ],
            [
                'answer_sentence' => 'Niene Stom',
                'is_correct' => false,
                'question_id' => 141,
            ],
            [
                'answer_sentence' => 'object-oriented programming',
                'is_correct' => false,
                'question_id' => 142,
            ],
            [
                'answer_sentence' => 'structured programming',
                'is_correct' => false,
                'question_id' => 142,
            ],
            [
                'answer_sentence' => 'functional programming',
                'is_correct' => false,
                'question_id' => 142,
            ],
            [
                'answer_sentence' => 'all of the mentioned',
                'is_correct' => True,
                'question_id' => 142,
            ],
            [
                'answer_sentence' => 'no',
                'is_correct' => false,
                'question_id' => 143,
            ],
            [
                'answer_sentence' => 'yes',
                'is_correct' => True,
                'question_id' => 143,
            ],
            [
                'answer_sentence' => 'machine dependent',
                'is_correct' => false,
                'question_id' => 143,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 143,
            ],
            [
                'answer_sentence' => '.python',
                'is_correct' => false,
                'question_id' => 144,
            ],
            [
                'answer_sentence' => '.pl',
                'is_correct' => false,
                'question_id' => 144,
            ],
            [
                'answer_sentence' => '.py',
                'is_correct' => True,
                'question_id' => 144,
            ],
            [
                'answer_sentence' => '.p',
                'is_correct' => false,
                'question_id' => 144,
            ],
            [
                'answer_sentence' => 'Python code is both compiled and interpreted',
                'is_correct' => True,
                'question_id' => 145,
            ],
            [
                'answer_sentence' => 'Python code is neither compiled nor interpreted',
                'is_correct' => false,
                'question_id' => 145,
            ],
            [
                'answer_sentence' => 'Python code is only compiled',
                'is_correct' => false,
                'question_id' => 145,
            ],
            [
                'answer_sentence' => 'Python code is only interpreted',
                'is_correct' => false,
                'question_id' => 145,
            ],
            [
                'answer_sentence' => 'Capitalized',
                'is_correct' => false,
                'question_id' => 146,
            ],
            [
                'answer_sentence' => 'lower case',
                'is_correct' => false,
                'question_id' => 146,
            ],
            [
                'answer_sentence' => 'UPPER CASE',
                'is_correct' => false,
                'question_id' => 146,
            ],
            [
                'answer_sentence' => 'None of the mentioned',
                'is_correct' => True,
                'question_id' => 146,
            ],
            [
                'answer_sentence' => '7',
                'is_correct' => True,
                'question_id' => 147,
            ],
            [
                'answer_sentence' => '2',
                'is_correct' => false,
                'question_id' => 147,
            ],
            [
                'answer_sentence' => '4',
                'is_correct' => false,
                'question_id' => 147,
            ],
            [
                'answer_sentence' => '1',
                'is_correct' => false,
                'question_id' => 147,
            ],
            [
                'answer_sentence' => 'Indentation',
                'is_correct' => True,
                'question_id' => 148,
            ],
            [
                'answer_sentence' => 'Key',
                'is_correct' => false,
                'question_id' => 148,
            ],
            [
                'answer_sentence' => 'Brackets',
                'is_correct' => false,
                'question_id' => 148,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => false,
                'question_id' => 148,
            ],
            [
                'answer_sentence' => 'Function',
                'is_correct' => false,
                'question_id' => 149,
            ],
            [
                'answer_sentence' => 'def',
                'is_correct' => True,
                'question_id' => 149,
            ],
            [
                'answer_sentence' => 'Fun',
                'is_correct' => false,
                'question_id' => 149,
            ],
            [
                'answer_sentence' => 'Define',
                'is_correct' => false,
                'question_id' => 149,
            ],
            [
                'answer_sentence' => '//',
                'is_correct' => false,
                'question_id' => 150,
            ],
            [
                'answer_sentence' => '#',
                'is_correct' => True,
                'question_id' => 150,
            ],
            [
                'answer_sentence' => '!',
                'is_correct' => false,
                'question_id' => 150,
            ],
            [
                'answer_sentence' => '/*',
                'is_correct' => false,
                'question_id' => 150,
            ],
            [
                'answer_sentence' => '1 2 3',
                'is_correct' => false,
                'question_id' => 151,
            ],
            [
                'answer_sentence' => 'error',
                'is_correct' => True,
                'question_id' => 151,
            ],
            [
                'answer_sentence' => '1 2',
                'is_correct' => false,
                'question_id' => 151,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 151,
            ],
            [
                'answer_sentence' => 'sys.version(1)',
                'is_correct' => false,
                'question_id' => 152,
            ],
            [
                'answer_sentence' => 'sys.version(0)',
                'is_correct' => false,
                'question_id' => 152,
            ],
            [
                'answer_sentence' => 'sys.version()',
                'is_correct' => false,
                'question_id' => 152,
            ],
            [
                'answer_sentence' => 'sys.version',
                'is_correct' => True,
                'question_id' => 152,
            ],
            [
                'answer_sentence' => 'pi',
                'is_correct' => false,
                'question_id' => 153,
            ],
            [
                'answer_sentence' => 'anonymous',
                'is_correct' => false,
                'question_id' => 153,
            ],
            [
                'answer_sentence' => 'lambda',
                'is_correct' => True,
                'question_id' => 153,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 153,
            ],
            [
                'answer_sentence' => 'Exponential, Parentheses, Multiplication, Division, Addition, Subtraction',
                'is_correct' => false,
                'question_id' => 154,
            ],
            [
                'answer_sentence' => 'Exponential, Parentheses, Division, Multiplication, Addition, Subtraction',
                'is_correct' => false,
                'question_id' => 154,
            ],
            [
                'answer_sentence' => 'Parentheses, Exponential, Multiplication, Division, Subtraction, Addition',
                'is_correct' => false,
                'question_id' => 154,
            ],
            [
                'answer_sentence' => 'Parentheses, Exponential, Multiplication, Division, Addition, Subtraction',
                'is_correct' => True,
                'question_id' => 154,
            ],
            [
                'answer_sentence' => '4',
                'is_correct' => True,
                'question_id' => 155,
            ],
            [
                'answer_sentence' => '2',
                'is_correct' => false,
                'question_id' => 155,
            ],
            [
                'answer_sentence' => '1',
                'is_correct' => false,
                'question_id' => 155,
            ],
            [
                'answer_sentence' => '8',
                'is_correct' => false,
                'question_id' => 155,
            ],
            [
                'answer_sentence' => 'Pip Installs Python',
                'is_correct' => false,
                'question_id' => 156,
            ],
            [
                'answer_sentence' => 'Pip Installs Packages',
                'is_correct' => false,
                'question_id' => 156,
            ],
            [
                'answer_sentence' => 'Preferred Installer Program',
                'is_correct' => True,
                'question_id' => 156,
            ],
            [
                'answer_sentence' => 'All of the mentioned',
                'is_correct' => false,
                'question_id' => 156,
            ],
            [
                'answer_sentence' => 'underscore and ampersand are the only two special characters allowed',
                'is_correct' => false,
                'question_id' => 157,
            ],
            [
                'answer_sentence' => 'unlimited length',
                'is_correct' => True,
                'question_id' => 157,
            ],
            [
                'answer_sentence' => 'all private members must have leading and trailing underscores',
                'is_correct' => false,
                'question_id' => 157,
            ],
            [
                'answer_sentence' => 'none of the mentioned',
                'is_correct' => false,
                'question_id' => 157,
            ],
            [
                'answer_sentence' => '512, 64, 512',
                'is_correct' => True,
                'question_id' => 158,
            ],
            [
                'answer_sentence' => '512, 512, 512',
                'is_correct' => false,
                'question_id' => 158,
            ],
            [
                'answer_sentence' => '64, 512, 64',
                'is_correct' => false,
                'question_id' => 158,
            ],
            [
                'answer_sentence' => '64, 64, 64',
                'is_correct' => false,
                'question_id' => 158,
            ],
            [
                'answer_sentence' => '|',
                'is_correct' => false,
                'question_id' => 159,
            ],
            [
                'answer_sentence' => '//',
                'is_correct' => True,
                'question_id' => 159,
            ],
            [
                'answer_sentence' => '/',
                'is_correct' => false,
                'question_id' => 159,
            ],
            [
                'answer_sentence' => '%',
                'is_correct' => false,
                'question_id' => 159,
            ],
            [
                'answer_sentence' => '[1, 0, 2, ‘hello’, ”, []]',
                'is_correct' => false,
                'question_id' => 160,
            ],
            [
                'answer_sentence' => 'Error',
                'is_correct' => false,
                'question_id' => 160,
            ],
            [
                'answer_sentence' => '[1, 2, ‘hello’]',
                'is_correct' => True,
                'question_id' => 160,
            ],
            [
                'answer_sentence' => '[1, 0, 2, 0, ‘hello’, ”, []]',
                'is_correct' => false,
                'question_id' => 160,
            ],

        ];

        // Loop through each answer and save it
        foreach ($answers as $answerData) {
            Answer::create($answerData);
        }
    }
}
