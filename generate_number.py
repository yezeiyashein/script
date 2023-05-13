import random

start = 12
end = 62

excluded_numbers = []
with open('excluded.txt', 'r') as f:
    for line in f:
        for excluded_number in line.split(','):
            excluded_numbers.append(int(excluded_number.strip()))

random_numbers = []
while len(random_numbers) < 3:
    random_number = random.randint(start, end)
    if random_number not in excluded_numbers:
        random_numbers.append(random_number)

print("Random Question Numbers:", ", ".join(str(number) for number in random_numbers))
