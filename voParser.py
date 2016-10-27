classes = {}
classes['sem_com_cur'] = ['&id_sem_com_cur', 'periodo', 'creditos', 'id_com_cur']
classes['plan'] = ['&id_plan', 'nome', 'dat_cri', 'dat_exe', 'id_pro']
classes['mod'] = ['&id_mod', 'nome']
classes['turma'] = ['&id_turma', 'nome', 'turno', 'qtd_alunos', 'per_atual', 'id_matriz', 'id_sem_plan']
classes['area'] = ['&id_area', 'nome', 'id_subarea', 'id_grupo']
classes['matriz'] = ['&id_matriz', 'nome', 'ano', 'id_curso']
classes['sem_plan'] = ['&id_sem_plan', 'semestre', 'id_plan']
classes['com_cur'] = ['id_com_cur', 'nome', 'car_hor', 'id_matriz', 'id_nucleo', 'id_area']

for classe in classes:
	print (classe)
	for atributo in classes[classe]:
		print ("   " + atributo)
