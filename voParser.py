classes = {}
classes['Sem_com_cur'] = ['&id_sem_com_cur', 'periodo', 'creditos', 'id_com_cur']
classes['Plan'] = ['&id_plan', 'nome', 'dat_cri', 'dat_exe', 'id_pro']
classes['Mod'] = ['&id_mod', 'nome']
classes['Turma'] = ['&id_turma', 'nome', 'turno', 'qtd_alunos', 'per_atual', 'id_matriz', 'id_sem_plan']
classes['Area'] = ['&id_area', 'nome', 'id_subarea', 'id_grupo']
classes['Matriz'] = ['&id_matriz', 'nome', 'ano', 'id_curso']
classes['Sem_plan'] = ['&id_sem_plan', 'semestre', 'id_plan']
classes['Com_cur'] = ['id_com_cur', 'nome', 'car_hor', 'id_matriz', 'id_nucleo', 'id_area']

f = open('teste.txt', "w")

TAB = "   "

f.write("<?php\n\n")

for classe in classes:
	f.write("class "+ classe + " implements JsonSerializable { \n")
	
	# Escreve os atributos
	for atributo in classes[classe]:
		atributo = atributo.replace('&', "")
		f.write(TAB)
		f.write ("private $" + atributo + ";\n")

	# Escreve o construtor

	f.write("\n" + TAB + "public function __construct(")

	for i, atributo in enumerate(classes[classe]):
		atributo = atributo.replace('&', "")
		f.write ("$" + atributo)

		if i < len(classes[classe])-1:
			f.write(", ")

	f.write(") {\n")

	# Escrever $this->attr = $attr
	for i, atributo in enumerate(classes[classe]):
		atributo = atributo.replace('&', "")
		f.write (TAB + TAB + "$this->" + atributo + " = " + "$" + atributo + ";\n")


	f.write(TAB + "}\n") # Fim construtor

	# Escrever Getters e Setters

	for i, atributo in enumerate(classes[classe]):
		atributo = atributo.replace('&', "")
		# Getter
		f.write (TAB + "public function get" + atributo.capitalize() + " " + "(){\n")	
		f.write(TAB + TAB)
		f.write("return $this->"+atributo+";\n")
		f.write(TAB + "}\n\n")

		# Setter
		f.write (TAB + "public function set" + atributo.capitalize() + " " + "("+ "$" + atributo +"){\n")
		f.write(TAB + TAB)
		f.write("$this->" + atributo + " = " + "$" + atributo + ";\n")
		f.write(TAB + "}\n\n")		

	f.write("}\n\n\n")


f.write("\n\n?>")