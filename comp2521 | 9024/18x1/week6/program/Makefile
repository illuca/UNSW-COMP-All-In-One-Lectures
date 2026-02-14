CC = gcc
CFLAGS = -Wall -Werror -g

all : graphAnalyser

graphAnalyser : Graph.o graphAnalyser.o 
	$(CC) -o graphAnalyser  Graph.o graphAnalyser.o

graphAnalyser.o: graphAnalyser.c Graph.h
	$(CC) $(CFLAGS) -c  graphAnalyser.c

Graph.o : Graph.c  Graph.h
